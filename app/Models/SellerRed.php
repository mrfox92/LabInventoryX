<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerRed extends Model
{
    use HasFactory;

    protected $table = 'seller_redes';

    protected $fillable = ['url', 'seller_id', 'red_id'];

    //  relacion 1 a muchos inversa
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
    //  relacion 1 a muchos inversa
    public function Red()
    {
        return $this->belongsTo(Red::class);
    }

}
