<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\T551;
use App\T531;
use App\T101;
use Illuminate\Http\Request;
use redirect;

class AngsuranController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$no = 1;
		$num = 1;
		$transaksi = T551::all();
		$t101s = T101::all();

		return view('transaksi.angsuran', compact('transaksi', 't101s', 'no', 'num'));

	}

	public function transaksi()
	{
		$transaksi = T551::all();

		$no = 0;
		$data = array();
		foreach ($transaksi as $list) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $list->code_customer;
			$row[] = $list->type;
			$row[] = $list->totalloan;
			$row[] = $list->totalpayment;
			$row[] = $list->status;
			$row[] = $list->created_at->format('d M Y');
			$row[] = 
			'<span class="dropdown">
			<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
			<i class="la la-ellipsis-h"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
			<a href="javascript::void" class="dropdown-item" onclick="viewDetail(' .$list->id. ')">
			<i class="la la-edit"></i> Lihat Detail
			</a>
			<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
			<button class="dropdown-item" type="button" onclick="deleteData(' .$list->id. ')"><i class="la la-trash"></i> Delete Data</button>
			<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
			</div>
			</span>
			<a href="" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Ubah">
			<i class="la la-edit"></i>
			</a>'
			;
			$data[] = $row;

		}

		$output = array("data"=> $data);
		return response()->json($output);
	}

	public function detail($id)
	{
		$id = T551::find($id);
		$detail = T531::where([
			'code_customer' => $id->code_customer, 
			'type' => $id->type
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
	public function store($code) {

		$angsuran = new T551;
		$angsuran->code_customer = $code;
		$angsuran->type= 0;
		$angsuran->totalloan= 0;
		$angsuran->totalpayment= 0;
		$angsuran->status= 0;
		$angsuran->save();

		session(['code_customer' => $angsuran->code_customer]);
		session(['id' => $angsuran->id]);

		return redirect('/angsuran/detail');

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
		$t101s = T551::destroy($id);

		return redirect()->back()->with('msg', 'Data dihapus');
	}
}
