<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //  relacion 1 a muchos - comunas
    public function communes()
    {
        return $this->hasMany(Commune::class);
    }
}
