<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'paket_id';

    public function budgetings()
    {
        return $this->hasMany(Budgeting::class, 'bdgt_pkt_id');
    }

    public function detailPaket()
    {
        return $this->hasMany(DetailPaket::class, 'depa_pkt_id');
    }
}
