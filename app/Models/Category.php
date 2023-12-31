<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'description'];

    // relacion 1 a muchos
    public function inventories() {
        return $this->hasMany(Inventory::class);
    }

    //  relacion a traves de
    public function services()
    {
        return $this->hasManyThrough(Service::class, Subcategory::class);
    }
}
