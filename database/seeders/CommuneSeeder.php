<?php

namespace Database\Seeders;

use App\Models\Commune;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //  comunas de chile por región
        
        $communes = [

            //  Arica y Parinacota
            
            [

                'name'  =>  'Arica', 
                'region_id' => 1,
            ],
            [

                'name'  =>  'Camarones', 
                'region_id' => 1,
            ],
            [

                'name'  =>  'Putre', 
                'region_id' => 1,
            ],
            [

                'name'  =>  'General Lagos',
                'region_id' => 1,
            ],
            //  Tarapacá
            
            [

                'name'  =>  'Iquique', 
                'region_id' =>  2
            ],
            [

                'name'  =>  'Alto Hospicio', 
                'region_id' =>  2
            ],
            [

                'name'  =>  'Pozo Almonte', 
                'region_id' =>  2
            ],
            [

                'name'  =>  'Camiña', 
                'region_id' =>  2
            ],
            [

                'name'  =>  'Colchane', 
                'region_id' =>  2
            ],
            [

                'name'  =>  'Huara', 
                'region_id' =>  2
            ],
            [

                'name'  =>  'Pica',
                'region_id' =>  2
            ],
            //  Antofagasta
            
            [

                'name'  =>  'Antofagasta', 
                'region_id' =>  3
            ],
            [

                'name'  =>  'Mejillones', 
                'region_id' =>  3
            ],
            [

                'name'  =>  'Sierra Gorda', 
                'region_id' =>  3
            ],
            [

                'name'  =>  'Taltal', 
                'region_id' =>  3
            ],
            [

                'name'  =>  'Calama', 
                'region_id' =>  3
            ],
            [

                'name'  =>  'Ollagüe', 
                'region_id' =>  3
            ],
            [

                'name'  =>  'San Pedro de Atacama', 
                'region_id' =>  3
            ],
            [

                'name'  =>  'Tocopilla', 
                'region_id' =>  3
            ],
            [

                'name'  =>  'María Elena',
                'region_id' =>  3
            ],
            //  Atacama
            
            [

                'name'  =>  'Copiapó', 
                'region_id' =>  4
            ],
            [

                'name'  =>  'Caldera', 
                'region_id' =>  4
            ],
            [

                'name'  =>  'Tierra Amarilla', 
                'region_id' =>  4
            ],
            [

                'name'  =>  'Chañaral', 
                'region_id' =>  4
            ],
            [

                'name'  =>  'Diego de Almagro', 
                'region_id' =>  4
            ],
            [

                'name'  =>  'Vallenar', 
                'region_id' =>  4
            ],
            [

                'name'  =>  'Alto del Carmen', 
                'region_id' =>  4
            ],
            [

                'name'  =>  'Freirina', 
                'region_id' =>  4
            ],
            [

                'name'  =>  'Huasco',
                'region_id' =>  4
            ],
            //  Coquimbo
            
            [

                'name'  =>  'La Serena', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Coquimbo', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Andacollo', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'La Higuera', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Paiguano', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Vicuña', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Illapel', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Canela', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Los Vilos', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Salamanca', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Ovalle', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Combarbalá', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Monte Patria', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Punitaqui', 
                'region_id' =>  5
            ],
            [

                'name'  =>  'Río Hurtado',
                'region_id' =>  5
            ],
            //  Valparaíso
            
            [

                'name'  =>  'Valparaíso', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Casablanca', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Concón', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Juan Fernández', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Puchuncaví', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Quintero', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Viña del Mar', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Isla de Pascua', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Los Andes', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Calle Larga', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Rinconada', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'San Esteban', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'La Ligua', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Cabildo', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Papudo', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Petorca', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Zapallar', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Quillota', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Calera', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Hijuelas', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'La Cruz', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Nogales', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'San Antonio', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Algarrobo', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Cartagena', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'El Quisco', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'El Tabo', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Santo Domingo', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'San Felipe', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Catemu', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Llaillay', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Panquehue', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Putaendo', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Santa María', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Quilpué', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Limache', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Olmué', 
                'region_id' =>  6
            ],
            [

                'name'  =>  'Villa Alemana',
                'region_id' =>  6
            ],
            //  Región del Libertador Gral. Bernardo O’Higgins
            
            [

                'name'  =>  'Rancagua', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Codegua', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Coinco', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Coltauco', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Doñihue', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Graneros', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Las Cabras', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Machalí', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Malloa', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Mostazal', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Olivar', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Peumo', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Pichidegua', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Quinta de Tilcoco', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Rengo', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Requínoa', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'San Vicente', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Pichilemu', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'La Estrella', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Litueche', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Marchihue', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Navidad', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Paredones', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'San Fernando', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Chépica', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Chimbarongo', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Lolol', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Nancagua', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Palmilla', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Peralillo', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Placilla', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Pumanque', 
                'region_id' =>  7
            ],
            [

                'name'  =>  'Santa Cruz',
                'region_id' =>  7
            ],
            //  Región del Maule
            
            [

                'name'  =>  'Talca', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Constitución', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Curepto', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Empedrado', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Maule', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Pelarco', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Pencahue', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Río Claro', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'San Clemente', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'San Rafael', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Cauquenes', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Chanco', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Pelluhue', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Curicó', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Hualañé', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Licantén', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Molina', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Rauco', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Romeral', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Sagrada Familia', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Teno', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Vichuquén', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Linares', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Colbún', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Longaví', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Parral', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Retiro', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'San Javier', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Villa Alegre', 
                'region_id' =>  8
            ],
            [

                'name'  =>  'Yerbas Buenas',
                'region_id' =>  8
            ],
            //  Región de Ñuble
            
            [

                'name'  =>  'Cobquecura', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Coelemu', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Ninhue', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Portezuelo', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Quirihue', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Ránquil', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Treguaco', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Bulnes', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Chillán Viejo', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Chillán', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'El Carmen', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Pemuco', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Pinto', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Quillón', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'San Ignacio', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Yungay', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Coihueco', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'Ñiquén', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'San Carlos', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'San Fabián', 
                'region_id' =>  9
            ],
            [

                'name'  =>  'San Nicolás',
                'region_id' =>  9
            ],
            //  Región del Biobío
            
            [

                'name'  =>  'Concepción', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Coronel', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Chiguayante', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Florida', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Hualqui', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Lota', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Penco', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'San Pedro de la Paz', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Santa Juana', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Talcahuano', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Tomé', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Hualpén', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Lebu', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Arauco', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Cañete', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Contulmo', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Curanilahue', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Los Álamos', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Tirúa', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Los Ángeles', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Antuco', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Cabrero', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Laja', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Mulchén', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Nacimiento', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Negrete', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Quilaco', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Quilleco', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'San Rosendo', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Santa Bárbara', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Tucapel', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Yumbel', 
                'region_id' =>  10
            ],
            [

                'name'  =>  'Alto Biobío',
                'region_id' =>  10
            ],
            //  Región de la Araucanía
            
            [

                'name'  =>  'Temuco', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Carahue', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Cunco', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Curarrehue', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Freire', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Galvarino', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Gorbea', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Lautaro', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Loncoche', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Melipeuco', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Nueva Imperial', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Padre las Casas', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Perquenco', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Pitrufquén', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Pucón', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Saavedra', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Teodoro Schmidt', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Toltén', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Vilcún', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Villarrica', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Cholchol', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Angol', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Collipulli', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Curacautín', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Ercilla', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Lonquimay', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Los Sauces', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Lumaco', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Purén', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Renaico', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Traiguén', 
                'region_id' =>  11
            ],
            [

                'name'  =>  'Victoria',
                'region_id' =>  11
            ],
            //  Región de Los Ríos
            
            [

                'name'  =>  'Valdivia', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Corral', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Lanco', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Los Lagos', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Máfil', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Mariquina', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Paillaco', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Panguipulli', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'La Unión', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Futrono', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Lago Ranco', 
                'region_id' =>  12
            ],
            [

                'name'  =>  'Río Bueno',
                'region_id' =>  12
            ],
            //  Región de Los Lagos
            
            [

                'name'  =>  'Puerto Montt', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Calbuco', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Cochamó', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Fresia', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Frutillar', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Los Muermos', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Llanquihue', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Maullín', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Puerto Varas', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Castro', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Ancud', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Chonchi', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Curaco de Vélez', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Dalcahue', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Puqueldón', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Queilén', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Quellón', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Quemchi', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Quinchao', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Osorno', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Puerto Octay', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Purranque', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Puyehue', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Río Negro', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'San Juan de la Costa', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'San Pablo', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Chaitén', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Futaleufú', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Hualaihué', 
                'region_id' =>  13
            ],
            [

                'name'  =>  'Palena',
                'region_id' =>  13
            ],
            //  Región Aisén del Gral. Carlos Ibáñez del Campo
            
            [

                'name'  =>  'Coihaique', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'Lago Verde', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'Aisén', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'Cisnes', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'Guaitecas', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'Cochrane', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'O’Higgins', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'Tortel', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'Chile Chico', 
                'region_id' =>  14
            ],
            [

                'name'  =>  'Río Ibáñez',
                'region_id' =>  14
            ],
            //  Región de Magallanes y de la Antártica Chilena
            
            [

                'name'  =>  'Punta Arenas', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Laguna Blanca', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Río Verde', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'San Gregorio', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Cabo de Hornos (Ex Navarino)', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Antártica', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Porvenir', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Primavera', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Timaukel', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Natales', 
                'region_id' =>  15
            ],
            [

                'name'  =>  'Torres del Paine',
                'region_id' =>  15
            ],
            //  Región Metropolitana de Santiago
            
            [

                'name'  =>  'Cerrillos', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Cerro Navia', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Conchalí', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'El Bosque', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Estación Central', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Huechuraba', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Independencia', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'La Cisterna', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'La Florida', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'La Granja', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'La Pintana', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'La Reina', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Las Condes', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Lo Barnechea', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Lo Espejo', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Lo Prado', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Macul', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Maipú', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Ñuñoa', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Pedro Aguirre Cerda', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Peñalolén', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Providencia', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Pudahuel', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Quilicura', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Quinta Normal', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Recoleta', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Renca', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Santiago', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'San Joaquín', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'San Miguel', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'San Ramón', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Vitacura', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Puente Alto', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Pirque', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'San José de Maipo', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Colina', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Lampa', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Tiltil', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'San Bernardo', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Buin', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Calera de Tango', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Paine', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Melipilla', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Alhué', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Curacaví', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'María Pinto', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'San Pedro', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Talagante', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'El Monte', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Isla de Maipo', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Padre Hurtado', 
                'region_id' =>  16
            ],
            [

                'name'  =>  'Peñaflor',
                'region_id' =>  16
            ],

        ];

        foreach ($communes as $commune) {
            Commune::factory(1)->create($commune);
        }



        // 'comunas' => ['Arica', 'Camarones', 'Putre', 'General Lagos']
        // 'comunas' => ['Iquique', 'Alto Hospicio', 'Pozo Almonte', 'Camiña', 'Colchane', 'Huara', 'Pica']
        // 'comunas' => ['Antofagasta', 'Mejillones', 'Sierra Gorda', 'Taltal', 'Calama', 'Ollagüe', 'San Pedro de Atacama', 'Tocopilla', 'María Elena']
        // 'comunas' => ['Copiapó', 'Caldera', 'Tierra Amarilla', 'Chañaral', 'Diego de Almagro', 'Vallenar', 'Alto del Carmen', 'Freirina', 'Huasco']
        // 'comunas' => ['La Serena', 'Coquimbo', 'Andacollo', 'La Higuera', 'Paiguano', 'Vicuña', 'Illapel', 'Canela', 'Los Vilos', 'Salamanca', 'Ovalle', 'Combarbalá', 'Monte Patria', 'Punitaqui', 'Río Hurtado']
        // 'comunas' => ['Valparaíso', 'Casablanca', 'Concón', 'Juan Fernández', 'Puchuncaví', 'Quintero', 'Viña del Mar', 'Isla de Pascua', 'Los Andes', 'Calle Larga', 'Rinconada', 'San Esteban', 'La Ligua', 'Cabildo', 'Papudo', 'Petorca', 'Zapallar', 'Quillota', 'Calera', 'Hijuelas', 'La Cruz', 'Nogales', 'San Antonio', 'Algarrobo', 'Cartagena', 'El Quisco', 'El Tabo', 'Santo Domingo', 'San Felipe', 'Catemu', 'Llaillay', 'Panquehue', 'Putaendo', 'Santa María', 'Quilpué', 'Limache', 'Olmué', 'Villa Alemana']
        // 'comunas' => ['Rancagua', 'Codegua', 'Coinco', 'Coltauco', 'Doñihue', 'Graneros', 'Las Cabras', 'Machalí', 'Malloa', 'Mostazal', 'Olivar', 'Peumo', 'Pichidegua', 'Quinta de Tilcoco', 'Rengo', 'Requínoa', 'San Vicente', 'Pichilemu', 'La Estrella', 'Litueche', 'Marchihue', 'Navidad', 'Paredones', 'San Fernando', 'Chépica', 'Chimbarongo', 'Lolol', 'Nancagua', 'Palmilla', 'Peralillo', 'Placilla', 'Pumanque', 'Santa Cruz']
        // 'comunas' => ['Talca', 'Constitución', 'Curepto', 'Empedrado', 'Maule', 'Pelarco', 'Pencahue', 'Río Claro', 'San Clemente', 'San Rafael', 'Cauquenes', 'Chanco', 'Pelluhue', 'Curicó', 'Hualañé', 'Licantén', 'Molina', 'Rauco', 'Romeral', 'Sagrada Familia', 'Teno', 'Vichuquén', 'Linares', 'Colbún', 'Longaví', 'Parral', 'Retiro', 'San Javier', 'Villa Alegre', 'Yerbas Buenas']
        // 'comunas' => ['Cobquecura', 'Coelemu', 'Ninhue', 'Portezuelo', 'Quirihue', 'Ránquil', 'Treguaco', 'Bulnes', 'Chillán Viejo', 'Chillán', 'El Carmen', 'Pemuco', 'Pinto', 'Quillón', 'San Ignacio', 'Yungay', 'Coihueco', 'Ñiquén', 'San Carlos', 'San Fabián', 'San Nicolás']
        // 'comunas' => ['Concepción', 'Coronel', 'Chiguayante', 'Florida', 'Hualqui', 'Lota', 'Penco', 'San Pedro de la Paz', 'Santa Juana', 'Talcahuano', 'Tomé', 'Hualpén', 'Lebu', 'Arauco', 'Cañete', 'Contulmo', 'Curanilahue', 'Los Álamos', 'Tirúa', 'Los Ángeles', 'Antuco', 'Cabrero', 'Laja', 'Mulchén', 'Nacimiento', 'Negrete', 'Quilaco', 'Quilleco', 'San Rosendo', 'Santa Bárbara', 'Tucapel', 'Yumbel', 'Alto Biobío']
        // 'comunas' => ['Temuco', 'Carahue', 'Cunco', 'Curarrehue', 'Freire', 'Galvarino', 'Gorbea', 'Lautaro', 'Loncoche', 'Melipeuco', 'Nueva Imperial', 'Padre las Casas', 'Perquenco', 'Pitrufquén', 'Pucón', 'Saavedra', 'Teodoro Schmidt', 'Toltén', 'Vilcún', 'Villarrica', 'Cholchol', 'Angol', 'Collipulli', 'Curacautín', 'Ercilla', 'Lonquimay', 'Los Sauces', 'Lumaco', 'Purén', 'Renaico', 'Traiguén', 'Victoria']
        // 'comunas' => ['Valdivia', 'Corral', 'Lanco', 'Los Lagos', 'Máfil', 'Mariquina', 'Paillaco', 'Panguipulli', 'La Unión', 'Futrono', 'Lago Ranco', 'Río Bueno']
        // 'comunas' => ['Puerto Montt', 'Calbuco', 'Cochamó', 'Fresia', 'Frutillar', 'Los Muermos', 'Llanquihue', 'Maullín', 'Puerto Varas', 'Castro', 'Ancud', 'Chonchi', 'Curaco de Vélez', 'Dalcahue', 'Puqueldón', 'Queilén', 'Quellón', 'Quemchi', 'Quinchao', 'Osorno', 'Puerto Octay', 'Purranque', 'Puyehue', 'Río Negro', 'San Juan de la Costa', 'San Pablo', 'Chaitén', 'Futaleufú', 'Hualaihué', 'Palena']
        // 'comunas' => ['Coihaique', 'Lago Verde', 'Aisén', 'Cisnes', 'Guaitecas', 'Cochrane', 'O’Higgins', 'Tortel', 'Chile Chico', 'Río Ibáñez']
        // 'comunas' => ['Punta Arenas', 'Laguna Blanca', 'Río Verde', 'San Gregorio', 'Cabo de Hornos (Ex Navarino)', 'Antártica', 'Porvenir', 'Primavera', 'Timaukel', 'Natales', 'Torres del Paine']
        // 'comunas' => ['Cerrillos', 'Cerro Navia', 'Conchalí', 'El Bosque', 'Estación Central', 'Huechuraba', 'Independencia', 'La Cisterna', 'La Florida', 'La Granja', 'La Pintana', 'La Reina', 'Las Condes', 'Lo Barnechea', 'Lo Espejo', 'Lo Prado', 'Macul', 'Maipú', 'Ñuñoa', 'Pedro Aguirre Cerda', 'Peñalolén', 'Providencia', 'Pudahuel', 'Quilicura', 'Quinta Normal', 'Recoleta', 'Renca', 'Santiago', 'San Joaquín', 'San Miguel', 'San Ramón', 'Vitacura', 'Puente Alto', 'Pirque', 'San José de Maipo', 'Colina', 'Lampa', 'Tiltil', 'San Bernardo', 'Buin', 'Calera de Tango', 'Paine', 'Melipilla', 'Alhué', 'Curacaví', 'María Pinto', 'San Pedro', 'Talagante', 'El Monte', 'Isla de Maipo', 'Padre Hurtado', 'Peñaflor']

    }
}
