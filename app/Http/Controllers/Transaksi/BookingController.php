<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\T003;
use App\T004;
use App\T101;
use App\User;
use Illuminate\Http\Request;
use redirect;
use PDF;
use Carbon\Carbon;

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

	public function tglId($tgl)
	{
		$dt = new  Carbon($tgl);
		setlocale(LC_TIME, 'IND');
		
		return $dt->formatLocalized('%e %B %Y');
	}

	public function generate_pdf($code) {

		$date = Carbon::now('Asia/Jakarta');
		$dates = $this->tglId($date);
		$tempo = Carbon::now('Asia/Jakarta')->addDay(30);
		$tempos = $this->tglId($tempo);
		$t101s = T101::where('code_customer', $code)->first();
		$t002s = User::where('code', $code)->first();
		$t003s = T003::where('code_unit', $t101s->code_unit)->first();
		$t004s = T004::where([
		'type_unit' => $t101s->type_unit,
		'code_payment' => $t101s->type_payment
		])->first();

		$pdf = PDF::loadView('transaksi.pdf', compact('t101s', 't002s', 't003s', 't004s', 'date', 'dates', 'tempos'));
		return $pdf->stream('SPRS-'.$t101s->name_customer.'.pdf');
	}
}
