<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T011;
use App\Transformers\T011Transformer;

class T011Controller extends Controller
{
	public function get()
	{
		$t011s = T011::all();

		return fractal()
		->collection($t011s)
		->transformWith(new T011Transformer)
		->addMeta([
			'data_count' => T011::count()
		])
		->toArray();
	}
}
