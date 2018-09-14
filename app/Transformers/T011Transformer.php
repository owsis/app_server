<?php

namespace App\Transformers;

use App\T011;
use League\Fractal\TransformerAbstract;

class T011Transformer extends TransformerAbstract
{
	public function transform(T011 $t011)
	{
		return [
			'name_unit' => $t011->name_unit,
			'type_unit' => $t011->type_unit,
			'img1'     	=> 'http://smile-in-properti.store/storage/app/img_src/' . $t011->img1,
		];
	}
}
