<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //  Definimos los roles de nuestra aplicacion
    const ADMIN = 1;
    const SELLER = 2;
    const CUSTOMER = 3;

    //  relacion 1 a muchos
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
