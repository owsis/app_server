<?php

namespace App\Transformers;

use App\T102;
use League\Fractal\TransformerAbstract;

class T102Transformer extends TransformerAbstract {

	public function transform(T102 $t102) {
		return [
			'order_id'   => $t102->order_id,
			'va_number'  => $t102->va_number,
			'code_key'   => $t102->code_key,
			'name_key'   => $t102->name_key,
			'nominal'    => $t102->nominal,
			'code_user'  => $t102->code_user,
			'name_user'  => $t102->name_user,
			'status_key' => $t102->status_key,
			'status_use' => $t102->status_use,
			'created_at' => $t102->created_at->format('D, d-M-Y H:i:s T')
		];
	}
}
