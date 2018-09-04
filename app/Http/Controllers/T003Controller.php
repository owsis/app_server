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

	public function getKeyUnit($name)
	{
		$t005s = T005::where('name_key', $name)->get();

		return fractal()
		->collection($t005s)
		->transformWith(new T005Transformer)
		->addMeta([
			'data_count' => T005::where('name_key', $name)->count(),
		])
		->toArray();
	}

	public function getBlock(T003_1 $t003_1, $type)
	{
		$t003s_1 = $t003_1::where('type_unit', $type)->get();

		return fractal()
		->collection($t003s_1)
		->transformWith(new T003_1Transformer)
		->addMeta([
			'data_count' => $t003_1::where('type_unit', $type)->count(),
		])
		->toArray();

	}

}
