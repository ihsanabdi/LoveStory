<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{

    protected $table = 'konsumen';
    protected $primaryKey = 'kons_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'kons_user_id');
    }
}
