<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::factory(50)->create()->each(function(Service $service) {
            //  Generamos 4 imagenes para cada servicio a traves del modelo Image - Relación Polimorfica
            Image::factory(4)->create([
                'imageable_id'      =>  $service->id,
                'imageable_type'    =>  Service::class
            ]);
        });
    }
}
