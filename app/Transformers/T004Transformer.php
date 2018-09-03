<?php

namespace App\Transformers;

use App\T004;
use League\Fractal\TransformerAbstract;

class T004Transformer extends TransformerAbstract
{
	public function transform(T004 $t004)
	{
		return [
			'code_payment' => $t004->code_payment,
			'name_payment' => $t004->name_payment,
			'dp' => $t004->dp,
			'kpr' => $t004->kpr,
			'disc' => $t004->disc,
		];
	}
}
