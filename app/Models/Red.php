<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    use HasFactory;
    protected $table = 'redes';
    protected $fillable = ['nombre', 'slug', 'description', 'icon'];

    //  relación muchos a muchos
    public function sellers()
    {
        return $this->belongsToMany(Seller::class);
    }
}
