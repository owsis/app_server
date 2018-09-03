<?php

namespace App\Transformers;

use App\T102;
use League\Fractal\TransformerAbstract;

class T102Transformer extends TransformerAbstract {

	public function transform(T102 $t102) {
		return [
			'order_id'   => $t102->order_id,
			'code_key'   => $t102->code_key,
			'nominal'    => $t102->nominal,
			'code_user'  => $t102->code_user,
			'name_user'  => $t102->name_user,
			'status_key' => $t102->status_key,
			'status_use' => $t102->status_use,
		];
	}
}
