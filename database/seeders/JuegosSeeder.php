<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JuegosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'Nombre'=>"God of War",
                'Genero'=>"Acción",
                'Descripcion'=>"God of War es la vuelta de Kratos a una nueva entrega con un nuevo comienzo para el personaje y una ambientación nórdica, ofreciéndonos una perspectiva más madura y realista de la mitología de dioses y monstruos milenarios habitual en la serie de títulos. En God of War, Kratos será un guerrero más curtido y pasivo, pues tendrá que desempeñar el rol de padre en un frío y hostil escenario, al que parece haberse retirado para olvidar su pasado.",
                'Fecha_salida'=>"20/04/2018",
                'Imagen'=>"Godofwar.jpg"
            ],
            [
                'Nombre'=>"Zelda",
                'Genero'=>"Aventura",
                'Descripcion'=>"Juego de la saga zelda que decide innovar con un mundo abierto con Link de nuevo como protagonista con la mision de rescatar a Zelda",
                'Fecha_salida'=>"20/04/2016",
                'Imagen'=>"Zelda.jpg"
            ],
            [
                'Nombre'=>"Sekiro",
                'Genero'=>"Acción",
                'Descripcion'=>"Juego de FromSoftware de alta dificultad con tematica samurai y mitologia japonesa",
                'Fecha_salida'=>"20/04/2017",
                'Imagen'=>"Sekiro.jpg"
            ],
            [
                'Nombre'=>"Elden Ring",
                'Genero'=>"Aventura",
                'Descripcion'=>"Juego de mundo abierto de FromSoftware de extrema dificulta en la que tendremos que convertirnos en señor del circulo",
                'Fecha_salida'=>"20/04/2022",
                'Imagen'=>"EldenRing.jpg"
            ]
            ];
        db::table('juegos')->insert($data);
    }
}