<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    //  relación muchos a muchos
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    //  relacion 1 a mucho inversa - usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
