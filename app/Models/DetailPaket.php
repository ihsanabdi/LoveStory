<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
    protected $table = 'detail_paket';
    protected $primaryKey = 'depa_id';

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'depa_pkt_id');
    }
}
