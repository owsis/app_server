<?php

namespace App\Transformers;

use App\T011;
use League\Fractal\TransformerAbstract;

class T011Transformer extends TransformerAbstract
{
	public function transform(T011 $t011)
	{
		return [
			'name_img' => $t011->name_img,
			'img'      => 'http://smile-in-properti.store/storage/app/img_src/' . $t011->img,
		];
	}
}
