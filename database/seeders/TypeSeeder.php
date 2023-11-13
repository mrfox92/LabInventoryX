<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //  estados tipo servicios

        $types = [
            [
                'name'          =>  'Servicio',
                'slug'          =>  Str::slug('Servicio'),
                'description'   =>  'Servicio ofrecido por una entidad, empresa u organización'
            ],
            [
                'name'          =>  'Iniciativa',
                'slug'          =>  Str::slug('Iniciativa'),
                'description'   =>  'Iniciativa creada con un propósito en particular'
            ],
            [
                'name'          =>  'Evento',
                'slug'          =>  Str::slug('Evento'),
                'description'   =>  'Evento organizado por alguna entidad u organización'
            ],
            [
                'name'          =>  'Convocatoria',
                'slug'          =>  Str::slug('Convocatoria'),
                'description'   =>  'Convocatoria o llamado público a alguna actividad en concreto'
            ],
        ];

        foreach ($types as $type) {
            Type::factory(1)->create($type);
        }
    }
}
