<?php

namespace App\Transformers;

use App\T012;
use League\Fractal\TransformerAbstract;

class T012Transformer extends TransformerAbstract
{
	public function transform(T012 $t012)
	{
		return [
			'type_unit' 		=> $t012->type_unit,
			'img_siteplan'	=> 'http://smile-in-properti.store/storage/app/img_src/' . $t012->img_siteplan,
			'img_denah'			=> 'http://smile-in-properti.store/storage/app/img_src/' . $t012->img_denah,
			'img_denah2'		=> 'http://smile-in-properti.store/storage/app/img_src/' . $t012->img_denah2,
		];
	}
}
