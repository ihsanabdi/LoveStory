<?php

namespace App\Models\Utilities;

use App\Models\User;


trait Helper
{

	public function dibuat()
	{
		return $this->belongsTo(User::class, 'create_by');
	}

	public function diubah()
	{
		return $this->belongsTo(User::class, 'change_by');
	}
}