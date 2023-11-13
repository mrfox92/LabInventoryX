<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'slug', 'description', 'price', 'stock', 'space_available', 'status',
        'av_status', 'init_at', 'finished_at', 'seller_id', 'type_id','subcategory_id'
    ];

    // estados servicios
    const BORRADOR = 1;
    const PUBLICADO = 2;

    //  estado disponibilidad
    const AVAILABLE = 1;
    const UNDERWAY  = 2;
    const FINISHED  = 3;


    //  relacion 1 a muchos inversa
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    //  relacion 1 a muchos inversa
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    //  relacion 1 a muchos inversa - tipos
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    //  relación muchos a muchos
    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }

    //  relacion 1 a muchos polimorfica
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
