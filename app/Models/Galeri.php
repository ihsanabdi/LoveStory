<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $primaryKey = 'glr_id';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'glr_ktgr_id');
    }
}
