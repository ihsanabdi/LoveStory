<?php

namespace App\Models;

use App\Models\Utilities\Helper;
use App\Models\Utilities\HelperInterface;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model implements HelperInterface
{
    use Helper;
    
    protected $table = 'kategori';
    protected $primaryKey = 'ktgr_id';

    // protected $fillable = ['ktgr_id', 'ktgr_nama'];

    public function galeris()
    {
        return $this->hasMany(Kategori::class, 'glr_ktgr_id');
    }

    public function vendors()
    {
    	return $this->hasMany(Vendor::class, 'vend_ktgr_id');	
    }
}
