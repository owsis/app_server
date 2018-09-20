<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\T101;
use App\User;
use Illuminate\Http\Request;
use redirect;

class BookingController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$no = 1;
		$transaksi = T101::join('t002s', 't002s.ktp', '=', 't101s.referral_from')
		->select([
			't101s.*',
			't002s.name'
		])
		->get();
		$t002s = User::all();

		return view('transaksi.booking', compact('transaksi', 't002s', 'no'));

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
		//
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
