<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCustomer extends Model
{
    use HasFactory;

    protected $table = 'service_customers';
    protected $fillable = ['service_id', 'customer_id'];

    //  relacion 1 a muchos inversa
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    //  relacion 1 a muchos inversa
    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

}
