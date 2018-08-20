<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\T004;
use Illuminate\Http\Request;

class CarabayarController extends Controller {

	public function __construct() {
		$this->middleware('auth:t001');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$no = 1;
		$carabayar = T004::all();

		return view('master.carabayar', compact('carabayar', 'no'));

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
		$t004s = T004::create([
			'type_unit' => $request->type_unit,
			'code_payment' => $request->code_payment,
			'name_payment' => $request->name_payment,
			'dp' => $request->dp,
			'kpr' => $request->kpr,
			'disc' => $request->disc,
		]);
		return redirect()->back()->with('msg', 'Data berhasil ditambah');
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
		$t004s = T004::find($id)->update([
			'type_unit' => $request->type_unit,
			'code_payment' => $request->code_payment,
			'name_payment' => $request->name_payment,
			'dp' => $request->dp,
			'kpr' => $request->kpr,
			'disc' => $request->disc,
		]);
		return redirect()->back()->with('msg', 'Data berhasil diupdate');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$t004s = T004::destroy($id);

		return redirect()->back()->with('msg', 'Data dihapus');
	}
}
