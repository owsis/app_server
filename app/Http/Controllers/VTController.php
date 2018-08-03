<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\T002;
use App\T102;
use App\Veritrans\Veritrans;

class VTController extends Controller
{
    public function __construct()
    {
        Veritrans::$serverKey = 'SB-Mid-server-iykXrCTadcrXdN-4RhB9TS6n';
        Veritrans::$isProduction = false;

    }

    public function notif()
    {
        $vt = new Veritrans;
        $json_result = file_get_contents('php://input');
        $result = json_decode($json_result);

        if ($result) {
            $notif = $vt->status($result->order_id);
        }

        error_log(print_r($result, true));

        $transaction  = $notif->transaction_status;
        $type         = $notif->payment_type;
        $order_id     = $notif->order_id;
        $gross_amount = $notif->gross_amount;
        $fraud        = $notif->fraud_status;

        if ($transaction == 'capture') {
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {
                if ($fraud == 'challenge') {
                    // TODO set payment status in merchant's database to 'Challenge by FDS'
                    // TODO merchant should decide whether this transaction is authorized or not in MAP
                    echo "Transaction order_id: " . $order_id . " is challenged by FDS";
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    echo "Transaction order_id: " . $order_id . " successfully captured using " . $type;
                }
            }
        } else if ($transaction == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            echo "Transaction order_id: " . $order_id . " successfully transfered using " . $type;

            $t102_id = T102::where('order_id', $order_id)->get();
            $t002_id = T002::where('code_user', $t102_id[0]->code_user)->get();

            T102::where('order_id', $order_id)->update([
                'status_saldo' => 'SETTLEMENT FROM VT',
            ]);

            T002::where('code_user', $t102_id[0]->code_user)->update([
                'saldo' => $t002_id[0]->saldo + $gross_amount,
            ]);

        } else if ($transaction == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
            
            T102::where('order_id', $order_id)->update([
                'status_saldo' => 'PENDING FROM VT',
            ]);
        } else if ($transaction == 'deny') {
            // TODO set payment status in merchant's database to 'Denied'
            echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";

            T102::where('order_id', $order_id)->update([
                'status_saldo' => 'DENY FROM VT',
            ]);

        } else if ($transaction == 'expire') {
            // TODO set payment status in merchant's database to 'Denied'
            echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";

            T102::where('order_id', $order_id)->update([
                'status_saldo' => 'EXPIRE FROM VT',
            ]);

        } 

    }
}
