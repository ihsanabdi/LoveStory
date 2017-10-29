<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'ktgr_id';

    public function galeris()
    {
        return $this->hasMany(Kategori::class, 'glr_ktgr_id');
    }

    public function vendors()
    {
    	return $this->hasMany(Vendor::class, 'vend_ktgr_id');	
    }
}
