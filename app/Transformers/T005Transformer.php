<?php

namespace App\Transformers;

use App\T005;
use League\Fractal\TransformerAbstract;

class T005Transformer extends TransformerAbstract {
	public function transform(T005 $t005) {
		return [
			'code_key' => $t005->code_key,
			'name_key' => $t005->name_key,
			'nom_key'  => $t005->nom_key
		];
	}
}
