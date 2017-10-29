<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailVendor extends Model
{
    protected $table = 'detail_vendor';
    protected $primaryKey = 'dave_id';

    public function vendor()
    {
        return $this->hasMany(Vendor::class, 'dave_vend_id');
    }
}
