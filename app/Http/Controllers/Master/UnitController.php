<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\T003;
use Illuminate\Http\Request;

class UnitController extends Controller {

	public function __construct() {
		$this->middleware('auth:t001');
	}

	public function csvToArray($filename = '', $delimiter = ',') {
		if (!file_exists($filename) || !is_readable($filename)) {
			return false;
		}

		$header = null;
		$data = array();
		if (($handle = fopen($filename, 'r')) !== false) {
			while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
				if (!$header) {
					$header = $row;
				} else {
					$data[] = array_combine($header, $row);
				}

			}
			fclose($handle);
		}

		return $data;
	}

	public function importCsv(Request $req) {
		$file = public_path('file/test.csv');

		$customerArr = $this->csvToArray($file);

		for ($i = 0; $i < count($customerArr); $i++) {
			User::firstOrCreate($customerArr[$i]);
		}

		return 'Jobi done or what ever';
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$no = 1;
		$unit = T003::all();

		return view('master.unit', compact('unit', 'no'));

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
		//
	}
}
