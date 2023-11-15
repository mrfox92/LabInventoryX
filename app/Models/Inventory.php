<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Inventory extends Model
{
    use HasFactory;
    use SoftDeletes;
    //   campos de asignación masiva
    protected $fillable = [
        'name',
        'slug',
        'description',
        'quantity',
        'status',
        'add_date',
        'exp_date',
        'user_id',
        'category_id'
    ];

     //  estado disponibilidad
     
    const UTILIZADO     = 1;
    const NODISPONIBLE  = 2;
    const REPARACION    = 3;
    const PRESTAMO      = 4;
    const DISPONIBLE    = 5;

    //  *IMPORTANT: una categoria puede ser ingresada por un usuario
    //  *IMPORTANT: un mismo usuario puede ingresar uno o muchos articulos
    //  un articulo inventario es ingresado por un determinado usuario
    //  relacion 1 a muchos inversa
    public function users() {
        return $this->belongsTo(User::class);
    }

    //  un articulo inventario pertenece a una categoria
    //  relacion 1 a muchos inversa
    public function category() {

        return $this->belongsTo(Category::class);
    }

    
}
