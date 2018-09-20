<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\T551;
use App\T531;
use App\T101;
use Illuminate\Http\Request;
use redirect;

class AngsuranDetailController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$no = 1;
		$idkonsumen = session('idkonsumen');
		$idangsuran = session('idangsuran');
		$idcustomer = T101::where('code_customer', session('idcustomer'))->first();
		$transaksi = T531::where('code_customer', session('idcustomer'))->get();
		$sumbaseamount = T531::where('code_customer', session('idangsuran'))->sum('baseamount');
		return view('transaksi.angsuran_detail', compact('transaksi', 'idkonsumen', 'idangsuran', 'idcustomer', 'no', 'sumbaseamount'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$no = 0;
		$tanggal = $request['payment_schedule'];
		$awal = $tanggal;
		while ($request['tenor'] > $no) {
			$no++;
			$detail = new T531;
			$detail->code_customer = $request['code_customer'];
			$detail->payment_schedule = $awal;
			$detail->type = $request['type'];
			$detail->description = $request['desc']. ' ke-' . $no;
			$detail->baseamount = $request['nominal'];
			$detail->billamount = $request['nominal'];
			$detail->status = 1;
			$detail->save();
			$awal = date('Y-m-d', strtotime("+1 month", strtotime($awal)));

		}

		session(['type_angsuran' => $request['type']]);

		return redirect()->back()->with('msg', 'Data berhasil dibuat');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$t101s = T101::destroy($id);

		return redirect()->back()->with('msg', 'Data dihapus');
	}
}
