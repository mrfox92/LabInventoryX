<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'region_id'];

    //  relacion y a muchos - vendedores
    public function sellers()
    {
        return $this->hasMany(Seller::class);
    }

    //  relacion 1 a muchos inversa - region
    public function region()
    {
        return $this->belongsTo(Region::class);
    }



}
