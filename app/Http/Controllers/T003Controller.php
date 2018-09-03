<?php

namespace App\Http\Controllers;

use App\T003;
use App\T003_1;
use App\T005;
use App\Transformers\T003Transformer;
use App\Transformers\T003_1Transformer;
use App\Transformers\T005Transformer;

class T003Controller extends Controller
{
	public function get($type, $block)
	{
		$t003s = T003::join('t005s', 't005s.code_key', '=', 't003s.code_key')
		->where([
			'type_unit' => $type, 
			'block_unit' => $block
		])
		->get();

        // return response()->json($t003s);
		return fractal()
		->collection($t003s)
		->transformWith(new T003Transformer)
		->addMeta([
			'data_count' => T003::join('t005s', 't005s.code_key', '=', 't003s.code_key')
			->where([
				'type_unit' => $type, 
				'block_unit' => $block
			])
			->count(),
		])
		->toArray();
	}

	public function getKey()
	{
		$T005 = T005::all();

		return fractal()
		->collection($t003s_2)
		->transformWith(new T005Transformer)
		->toArray();
	}

	public function getKeyUnit($name)
	{
		$t005 = T005::where('name_key', $name)->get();

		return fractal()
		->collection($t005)
		->transformWith(new T005Transformer)
		->toArray();
	}

	public function update() {
		\App\T006::where('price', '469411765')->update([
			'code_payment' => '5'
		]);

		\App\T006::where('price', '483636364')->update([
			'code_payment' => '4'
		]);

	}
}
