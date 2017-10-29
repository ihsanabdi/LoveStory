<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budgeting extends Model
{

    protected $table = 'budgeting';
    protected $primaryKey = 'bdgt_id';

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'bdgt_pkt_id');
    }
}
