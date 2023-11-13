<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $regions = [
            [
                'name' => 'Arica y Parinacota',
            ],
            [
                'name' => 'Tarapacá',
            ],
            [
                'name' => 'Antofagasta',
            ],
            [
                'name' => 'Atacama',
            ],
            [
                'name' => 'Coquimbo',
            ],
            [
                'name' => 'Valparaíso',
            ],
            [
                'name' => 'Región del Libertador Gral. Bernardo O’Higgins',
            ],
            [
                'name' => 'Región del Maule',
            ],
            [
                'name' => 'Región de Ñuble',
            ],
            [
                'name' => 'Región del Biobío',
            ],
            [
                'name' => 'Región de la Araucanía',
            ],
            [
                'name' => 'Región de Los Ríos',
            ],
            [
                'name' => 'Región de Los Lagos',
            ],
            [
                'name' => 'Región Aisén del Gral. Carlos Ibáñez del Campo',
            ],
            [
                'name' => 'Región de Magallanes y de la Antártica Chilena',
            ],
            [
                'name' => 'Región Metropolitana de Santiago',
            ]
        ];

        foreach ($regions as $region) {
            Region::factory(1)->create($region);
        }
    }   
}
