<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T012;
use App\Transformers\T012Transformer;

class T012Controller extends Controller
{
	public function get($type_u)
	{
		$t012s = T012::where('type_unit', $type_u)->get();

		return fractal()
		->collection($t012s)
		->transformWith(new T012Transformer)
		->addMeta([
			'data_count' => T012::where('type_unit', $type_u)->count()
		])
		->toArray();
	}
}
