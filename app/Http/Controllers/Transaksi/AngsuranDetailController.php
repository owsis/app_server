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
		$id = session('id');
		$code_customer = session('code_customer');
		$idcustomer = T101::where('code_customer', session('code_customer'))->first();
		$sumbaseamount = T531::where('code_customer', session('id'))->sum('baseamount');
		return view('transaksi.angsuran_detail', compact('transaksi', 'id', 'code_customer', 'idcustomer', 'no', 'sumbaseamount'));

	}

	public function detail($code, $type)
	{
		$detail = T531::where([
			'code_customer' => $code, 
			'type' => $type
		])->get();

		$no = 0;
		$data = array();
		foreach ($detail as $list) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $list->code_customer;
			$row[] = $list->payment_schedule;
			$row[] = $list->type;
			$row[] = $list->description;
			$row[] = $list->baseamount;
			$row[] = $list->billamount;
			$row[] = $list->status;
			$row[] = 
			'<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
			<i class="la la-edit"></i>
			</a>';
			$data[] = $row;

		}

		$output = array("data"=> $data);
		return response()->json($output);
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

		// $sumbaseamount = T531::where(['code_customer' => $request['code_customer'], 'type' => $request['type']])->sum('baseamount');

		// T551::where('id', session('idkonsumen'))->update([
		// 	'type' => $request['type'],
		// 	'totalloan' => $sumbaseamount
		// ]);

		session(['type_angsuran' => $request['type']]);

		return redirect()->back()->with('msg', 'Data berhasil dibuat');

	}

	public function save()
	{
		$sumbaseamount = T531::where([
			'code_customer' => session('code_customer'), 
			'type' => session('type_angsuran')
		])->sum('baseamount');

		T551::where('id', session('id'))->update([
			'type' => session('type_angsuran'),
			'totalloan' => $sumbaseamount
		]);

		return redirect('/angsuran')->with('msg', 'Data Angsuran secara detail berhasil dibuat');
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
