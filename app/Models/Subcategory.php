<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'slug', 'category_id'];

    //  relacion 1 a muchos
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    //  relacion 1 a muchos inversa
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
