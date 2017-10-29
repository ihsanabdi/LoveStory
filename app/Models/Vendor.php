<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{

    protected $table = 'vendor';
    protected $primaryKey = 'vend_id';

    public function detailVendors()
    {
        return $this->hasMany(DetailVendor::class, 'dave_vend_id');
    }

    public function kategori()
    {
    	return $this->belongsTo(Kategori::class, 'vend_ktgr_id');
    }
}
