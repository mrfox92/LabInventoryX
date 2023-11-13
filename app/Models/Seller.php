<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $seller = [
        'name',
        'slug',
        'description',
        'bio',
        'website_url',
        'address',
        'phone',
        'picture',
        'banner',
        'user_id',
        'commune_id',
    ];

    //  relacion 1 a muchos - servicios
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    //  relacion 1 a muchos inversa - usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //  relacion 1 a muchos inversa - comuna
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    //  relacion muchos a muchos
    public function redes()
    {
        return $this->belongsToMany(Red::class);
    }
}
