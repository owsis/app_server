<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\T003;
use App\T102;
use App\User;
use App\Veritrans\Veritrans;

class VTController extends Controller {
	public function __construct() {
		Veritrans::$serverKey = 'Mid-server-mn8OGvaWPvKYm5RloWUIvJBN';
		// Veritrans::$serverKey = 'SB-Mid-server-iykXrCTadcrXdN-4RhB9TS6n';
		Veritrans::$isProduction = true;

	}

	public function finishVT() {
		return view('sukses-midtrans');
	}

	public function failVT() {
		return view('gagal-midtrans');
	}

	public function cancelVT($orderid) {
		$t102s = T102::where('order_id', $orderid)->update([
			'status_key' => 'Payment Canceled',
		]);
	}

	public function notif() {
		$vt = new Veritrans;
		echo 'test notification handler';
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

		if (!isset($notif->va_numbers[0]->va_number)) {

			$va_number = $notif->permata_va_number;

		} else {

			$va_number = $notif->va_numbers[0]->va_number;

		}

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

			$t102_id = T102::where('order_id', $order_id)->get();
			$t002_id = User::where('code', $t102_id[0]->code_user)->get();

			/* --- SMS ke Konsumen --- */
			$userkey = "1xsbad";
			$passkey = "abc123";
			$notelp = $t002_id[0]->phone;
			$msg = "Terima kasih telah membayar Kunci dengan harga sebesar Rp. " . number_format($t102_id[0]->nominal) . "\n" .
			"Silakan lakukan booking Unit pada Cluster " . $t102_id[0]->type_unit;

			$url = "https://alpha.zenziva.net/apps/smsapi.php";
			$curlHandle = curl_init();
			curl_setopt($curlHandle, CURLOPT_URL, $url);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey=' . $userkey . '&passkey=' . $passkey . '&nohp=' . $notelp . '&pesan=' . urlencode($msg));
			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
			curl_setopt($curlHandle, CURLOPT_POST, 1);
			$results = curl_exec($curlHandle);
			curl_close($curlHandle);

			/* --- SMS ke Pak Yanto --- */
			$userkey = "1xsbad";
			$passkey = "abc123";
			$notelp = "6282177778055";
			$msg = "Kunci dengan harga sebesar Rp. " . number_format($t102_id[0]->nominal) . " telah dibayar oleh " . $t102_id[0]->name_user;

			$url = "https://alpha.zenziva.net/apps/smsapi.php";
			$curlHandle = curl_init();
			curl_setopt($curlHandle, CURLOPT_URL, $url);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey=' . $userkey . '&passkey=' . $passkey . '&nohp=' . $notelp . '&pesan=' . urlencode($msg));
			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
			curl_setopt($curlHandle, CURLOPT_POST, 1);
			$results = curl_exec($curlHandle);
			curl_close($curlHandle); 

			/* --- SMS ke Pak Jimmy --- */
			$userkey = "1xsbad";
			$passkey = "abc123";
			$notelp = "6285333333354";
			$msg = "Kunci dengan harga sebesar Rp. " . number_format($t102_id[0]->nominal) . " telah dibayar oleh " . $t102_id[0]->name_user;

			$url = "https://alpha.zenziva.net/apps/smsapi.php";
			$curlHandle = curl_init();
			curl_setopt($curlHandle, CURLOPT_URL, $url);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey=' . $userkey . '&passkey=' . $passkey . '&nohp=' . $notelp . '&pesan=' . urlencode($msg));
			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
			curl_setopt($curlHandle, CURLOPT_POST, 1);
			$results = curl_exec($curlHandle);
			curl_close($curlHandle); 

			/* --- SMS ke Pak Rudhy --- */
			$userkey = "1xsbad";
			$passkey = "abc123";
			$notelp = "6281316803664";
			$msg = "Kunci dengan harga sebesar Rp. " . number_format($t102_id[0]->nominal) . " telah dibayar oleh " . $t102_id[0]->name_user;

			$url = "https://alpha.zenziva.net/apps/smsapi.php";
			$curlHandle = curl_init();
			curl_setopt($curlHandle, CURLOPT_URL, $url);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey=' . $userkey . '&passkey=' . $passkey . '&nohp=' . $notelp . '&pesan=' . urlencode($msg));
			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
			curl_setopt($curlHandle, CURLOPT_POST, 1);
			$results = curl_exec($curlHandle);
			curl_close($curlHandle);

			T102::where('order_id', $order_id)->update([
				'status_key' => 'SETTLEMENT',
			]);

		} else if ($transaction == 'pending') {
			
			// TODO set payment status in merchant's database to 'Pending'
			echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;

			$t102_id = T102::where('order_id', $order_id)->get();
			$t002_id = User::where('code', $t102_id[0]->code_user)->get();

			T102::where('order_id', $order_id)->update([
				'va_number' => $va_number,
				'status_key' => 'PENDING',
				'status_use' => '1'
			]);

			/* --- SMS ke Konsumen --- */
			$userkey = "1xsbad";
			$passkey = "abc123";
			$notelp = $t002_id[0]->phone;
			$msg = "Anda telah memesan Kunci dengan harga sebesar Rp. " . number_format($t102_id[0]->nominal) . "\n" .
			"Segera lakukan pembayaran dengan Nomor Virtual Account " . $va_number;

			$url = "https://alpha.zenziva.net/apps/smsapi.php";
			$curlHandle = curl_init();
			curl_setopt($curlHandle, CURLOPT_URL, $url);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey=' . $userkey . '&passkey=' . $passkey . '&nohp=' . $notelp . '&pesan=' . urlencode($msg));
			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
			curl_setopt($curlHandle, CURLOPT_POST, 1);
			$results = curl_exec($curlHandle);
			curl_close($curlHandle);

		} else if ($transaction == 'deny') {
			// TODO set payment status in merchant's database to 'Denied'
			echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";

			$t102_id = T102::where('order_id', $order_id)->get();
			$t002_id = User::where('code', $t102_id[0]->code_user)->get();

			T102::where('order_id', $order_id)->update([
				'status_key' => 'DENY',
				'status_use' => '0'
			]);

			/* --- SMS ke Konsumen --- */
			$userkey = "1xsbad";
			$passkey = "abc123";
			$notelp = $t002_id[0]->phone;
			$msg = "Mohon maaf." . "\n" .
			"Nomor Virtual Account " . $va_number . " tidak dapat diproses. \n" .
			"Pembayaran Anda tertolak.";

			$url = "https://alpha.zenziva.net/apps/smsapi.php";
			$curlHandle = curl_init();
			curl_setopt($curlHandle, CURLOPT_URL, $url);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey=' . $userkey . '&passkey=' . $passkey . '&nohp=' . $notelp . '&pesan=' . urlencode($msg));
			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
			curl_setopt($curlHandle, CURLOPT_POST, 1);
			$results = curl_exec($curlHandle);
			curl_close($curlHandle);

		} else if ($transaction == 'expire') {
			// TODO set payment status in merchant's database to 'Denied'
			echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";

			$t102_id = T102::where('order_id', $order_id)->get();
			$t002_id = User::where('code', $t102_id[0]->code_user)->get();

			T102::where('order_id', $order_id)->update([
				'status_key' => 'EXPIRE',
				'status_use' => '0'
			]);

			/* --- SMS ke Konsumen --- */
			$userkey = "1xsbad";
			$passkey = "abc123";
			$notelp = $t002_id[0]->phone;
			$msg = "Mohon maaf." . "\n" .
			"Nomor Virtual Account " . $va_number . " telah melewati masa Pembayaran.";

			$url = "https://alpha.zenziva.net/apps/smsapi.php";
			$curlHandle = curl_init();
			curl_setopt($curlHandle, CURLOPT_URL, $url);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, 'userkey=' . $userkey . '&passkey=' . $passkey . '&nohp=' . $notelp . '&pesan=' . urlencode($msg));
			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
			curl_setopt($curlHandle, CURLOPT_POST, 1);
			$results = curl_exec($curlHandle);
			curl_close($curlHandle);

		}

	}
}
