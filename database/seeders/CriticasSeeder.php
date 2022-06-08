<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class criticasSeeder extends Seeder
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
                'Descripcion_critica'=>"Lo jugué hace cuatro años. Lo rejugué hace uno y medio. Y, a día de hoy, lo estoy jugando, otra vez, en PC, con un salto de calidad importante. Nada que no se haya dicho ya. Juegardo imprescindible. Pepino filipino. Pim pam toma lacasitos.",
                'Valoracion'=>"8",
                'id_juegos'=>"1",
                'id_usuario'=>"2"
            ],
            [
                'Descripcion_critica'=>"Este juego no solo me exploto la computadora. Si no que me hizo salir de casa, buscar trabajo, y ahorrar por 1 año para comprar una pc decente para correrlo a 60 Fps. La verdad, una experiencia increíble. Muy recomendable. Si quieres independizarte de tus padres, conseguir pareja de por medio, y que Kratos se coma tu placa de vídeo, pues ve a comprar el juego ya mismo.",
                'Valoracion'=>"9",
                'id_juegos'=>"1",
                'id_usuario'=>"3"
            ],
            [
                'Descripcion_critica'=>"Donde toma mecánicas de otros en la industria, las mejora; donde presenta nuevos, te golpeas la frente con asombro de que no se haya hecho antes. Breath of the Wild es un desarrollo bien hecho, y casi el mejor juego que jugarás durante todo el año.",
                'Valoracion'=>"10",
                'id_juegos'=>"2",
                'id_usuario'=>"2"
            ],
            [
                'Descripcion_critica'=>"Supongo que, al final, no es solo que Breath of the Wild indique que Zelda finalmente evolucionó y se movió más allá de la estructura en la que se apoyó durante tanto tiempo. Es que la evolución en cuestión ha requerido que Nintendo finalmente trate a su audiencia como personas inteligentes. Ese nuevo respeto ha dado lugar a algo grande, diferente y emocionante. Pero en un mundo abierto lleno de grandes cambios, Breath of the Wild también casi siempre se siente como un juego de Zelda, y se establece como el primer Zelda actual con un sentimiento vital en casi 20 años.",
                'Valoracion'=>"9",
                'id_juegos'=>"2",
                'id_usuario'=>"3"
            ],
            [
                'Descripcion_critica'=>"El sistema de combate es fantástico e innovador, infernalmente difícil, pero su humillación y batalla son increíblemente gratificantes. Sekiro se ve muy bien, se mueve muy bien y el entorno de diseño y los niveles son fenomenales.",
                'Valoracion'=>"9",
                'id_juegos'=>"3",
                'id_usuario'=>"2"
            ],
            [
                'Descripcion_critica'=>"Es un juego que será más del gusto de los jugadores de Bloodborne que de los jugadores de Dark Souls, pero si disfrutas de un juego duro pero gratificante y una exploración del mundo interesante, llena de escenarios y peleas de jefes intermitentes, Sekiro será para ti.",
                'Valoracion'=>"8",
                'id_juegos'=>"3",
                'id_usuario'=>"3"
            ],
            [
                'Descripcion_critica'=>"Elden Ring es un ejemplo andante de un juego 10 de 10 que no es perfecto. Ningún juego puede ser perfecto, pero aquí hay tanto para amar que se vuelve difícil prestar atención a sus errores. Cada pocas horas el juego se abría más y, cada vez, estaba desesperado por seguir buscando, explorando, conquistando. Ahora, más de 100 horas después y dos partidas, todo lo que quiero es descubrir más de lo que Elden Ring tiene reservado para mí. Este no es solo uno de los mejores títulos de From Software, sino uno de los mejores juegos que he jugado y me sorprendería si esto no tuviera repercusiones en toda la industria de los juegos.",
                'Valoracion'=>"10",
                'id_juegos'=>"4",
                'id_usuario'=>"2"
            ],
            [
                'Descripcion_critica'=>"Es un buen juego. Pero apenas funciona.
                Sigue tartamudeando y congelando, a veces ni siquiera comienza a permanecer en una pantalla blanca para siempre. Esta situación hace que algunos enemigos sean imposibles de vencer, solo porque el juego se desmorona cuando estás cerca de ellos.
                El sistema de lucha es molesto e injusto para el jugador, por poner un ejemplo: si logras derribar a un enemigo, se vuelve invencible y no puedes atacarlo. Supongo que te pasa lo mismo, pero no. Si te derriban recibes un combo que te mata.",
                'Valoracion'=>"6",
                'id_juegos'=>"4",
                'id_usuario'=>"3"
            ]
            ];
        db::table('criticas')->insert($data);
    }
}