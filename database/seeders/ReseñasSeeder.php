<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReseñasSeeder extends Seeder
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
                'Descripcion_Reseña'=>"God of War1",
                'Valoracion'=>"8",
                'id_juegos'=>"1",
                'id_usuario'=>"2"
            ],
            [
                'Descripcion_Reseña'=>"God of War2",
                'Valoracion'=>"9",
                'id_juegos'=>"1",
                'id_usuario'=>"3"
            ],
            [
                'Descripcion_Reseña'=>"Zelda",
                'Valoracion'=>"10",
                'id_juegos'=>"2",
                'id_usuario'=>"2"
            ],
            [
                'Descripcion_Reseña'=>"EldenRIng",
                'Valoracion'=>"10",
                'id_juegos'=>"4",
                'id_usuario'=>"5"
            ]
            ];
        db::table('reseñas')->insert($data);
    }
}