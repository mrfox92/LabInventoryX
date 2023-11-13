<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'          =>  'Hardware',
                'slug'          =>  Str::slug('Hardware'),
                'description'   =>  'Equipos físicos utilizados en el laboratorio, como computadoras, periféricos y componentes, necesarios para el desarrollo y la ejecución de programas y aplicaciones.',
            ],

            [
                'name'          =>  'Redes',
                'slug'          =>  Str::slug('Redes'),
                'description'   =>  'Dispositivos y accesorios utilizados para establecer conexiones de red, incluyendo routers, switches, cables y conectores, esenciales para configurar entornos de red y conectividad.',
            ],

            [
                'name'          =>  'Accesorios',
                'slug'          =>  Str::slug('Accesorios'),
                'description'   =>  'Artículos adicionales y pequeños, como cables, adaptadores y kits de limpieza, que complementan y mantienen la funcionalidad del equipo principal.',
            ],

            [
                'name'          =>  'Software',
                'slug'          =>  Str::slug('Software'),
                'description'   =>  'Conjunto de programas, sistemas operativos y herramientas de desarrollo necesarios para crear, editar y ejecutar aplicaciones y programas informáticos.',
            ],

            [
                'name'          =>  'Suministros Generales',
                'slug'          =>  Str::slug('Suministros Generales'),
                'description'   =>  'Materiales de oficina y papelería, elementos básicos necesarios para la administración y organización del laboratorio.',
            ],

            [
                'name'          =>  'Equipamiento Audiovisual',
                'slug'          =>  Str::slug('Equipamiento Audiovisual'),
                'description'   =>  'Dispositivos de presentación, como proyectores, pantallas interactivas, altavoces y micrófonos, utilizados para facilitar la comunicación visual y auditiva durante sesiones educativas.',
            ],

            [
                'name'          =>  'Herramientas de Pruebas y Medición',
                'slug'          =>  Str::slug('Herramientas de Pruebas y Medición'),
                'description'   =>  'Instrumentos para realizar mediciones y pruebas en circuitos, sistemas y hardware, como multímetros y analizadores lógicos.',
            ],

            [
                'name'          =>  'Mobiliario de Laboratorio',
                'slug'          =>  Str::slug('Mobiliario de Laboratorio'),
                'description'   =>  'Muebles y elementos de almacenamiento diseñados para proporcionar un entorno de trabajo ergonómico y organizado dentro del laboratorio.',
            ]

        ];

        foreach ($categories as $category) {
            
            Category::factory(1)->create($category);
        }
    }
}
