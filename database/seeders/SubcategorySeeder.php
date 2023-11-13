<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [

            //  Inmuebles
            [
                'category_id'   =>  1,
                'name'          =>  'Comprar',
                'slug'          =>  Str::slug('Comprar')
            ],
            [
                'category_id'   =>  1,
                'name'          =>  'Vender',
                'slug'          =>  Str::slug('Vender')
            ],
            
            //  Negocios y empleos
            [
                'category_id'   =>  2,
                'name'          =>  'Ofertas de Trabajo',
                'slug'          =>  Str::slug('Ofertas de Trabajo')
            ],
            [
                'category_id'   =>  2,
                'name'          =>  'Busco Trabajo',
                'slug'          =>  Str::slug('Busco Trabajo')
            ],
            [
                'category_id'   =>  2,
                'name'          =>  'Servicios',
                'slug'          =>  Str::slug('Servicios')
            ],
            [
                'category_id'   =>  2,
                'name'          =>  'Negocios',
                'slug'          =>  Str::slug('Negocios')
            ],
            
            //  Moda
            [
                'category_id'   =>  3,
                'name'          =>  'Vestuario',
                'slug'          =>  Str::slug('Vestuario')
            ],
            [
                'category_id'   =>  3,
                'name'          =>  'Salud y Belleza',
                'slug'          =>  Str::slug('Salud y Belleza')
            ],
            [
                'category_id'   =>  3,
                'name'          =>  'Calzado',
                'slug'          =>  Str::slug('Calzado')
            ],
            [
                'category_id'   =>  3,
                'name'          =>  'Accesorios',
                'slug'          =>  Str::slug('Accesorios')
            ],
            
            //  Salud y Belleza
            [
                'category_id'   =>  4,
                'name'          =>  'Lociones y Perfumes',
                'slug'          =>  Str::slug('Lociones y Perfumes')
            ],

            [
                'category_id'   =>  4,
                'name'          =>  'Accesorios de belleza',
                'slug'          =>  Str::slug('Accesorios de belleza')
            ],
            [
                'category_id'   =>  4,
                'name'          =>  'Cuidado Corporal',
                'slug'          =>  Str::slug('Cuidado Corporal')
            ],
            [
                'category_id'   =>  4,
                'name'          =>  'Cuidado del Cabello',
                'slug'          =>  Str::slug('Cuidado del Cabello')
            ],
            [
                'category_id'   =>  4,
                'name'          =>  'Cuidado Facial',
                'slug'          =>  Str::slug('Cuidado Facial')
            ],
            
            //  Tiempo Libre
            [
                'category_id'   =>  5,
                'name'          =>  'Deportes',
                'slug'          =>  Str::slug('Deportes')
            ],
            [
                'category_id'   =>  5,
                'name'          =>  'Bicicleta, Ciclismo y Accesorios',
                'slug'          =>  Str::slug('Bicicleta, Ciclismo y Accesorios')
            ],
            [
                'category_id'   =>  5,
                'name'          =>  'Deportes al aire libre y Accesorios',
                'slug'          =>  Str::slug('Deportes al aire libre y Accesorios')
            ],
            [
                'category_id'   =>  5,
                'name'          =>  'Libros y revistas',
                'slug'          =>  Str::slug('Libros y revistas')
            ],
            [
                'category_id'   =>  5,
                'name'          =>  'Animales y sus Accesorios',
                'slug'          =>  Str::slug('Animales y sus Accesorios')
            ],
            [
                'category_id'   =>  5,
                'name'          =>  'Arte',
                'slug'          =>  Str::slug('Arte')
            ],

            [
                'category_id'   =>  5,
                'name'          =>  'Outdoor',
                'slug'          =>  Str::slug('Outdoor')
            ],
            
            //  Tecnología
            [
                'category_id'   =>  6,
                'name'          =>  'Celulares y accesorios',
                'slug'          =>  Str::slug('Celulares y accesorios')
            ],
            [
                'category_id'   =>  6,
                'name'          =>  'Computadores y Accesorios',
                'slug'          =>  Str::slug('Computadores y Accesorios')
            ],
            [
                'category_id'   =>  6,
                'name'          =>  'Consolas, Videojuegos y accesorios',
                'slug'          =>  Str::slug('Consolas, Videojuegos y accesorios')
            ],
            [
                'category_id'   =>  6,
                'name'          =>  'Audio, Video y Fotografía',
                'slug'          =>  Str::slug('Audio, Video y Fotografía')
            ]
            
        ];

        foreach ($subcategories as $subcategory)
        {
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
