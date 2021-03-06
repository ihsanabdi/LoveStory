<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'role';
    protected $primaryKey = 'role_id';

    public function users()
    {
        return $this->hasMany(User::class, 'user_role_id');
    }

}
