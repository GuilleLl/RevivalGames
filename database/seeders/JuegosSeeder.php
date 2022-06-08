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
                'Genero'=>"Accion",
                'Descripcion'=>"God of War es la vuelta de Kratos a una nueva entrega con un nuevo comienzo para el personaje y una ambientación nórdica, ofreciéndonos una perspectiva más madura y realista de la mitología de dioses y monstruos milenarios habitual en la serie de títulos.",
                'Fecha_salida'=>"2018-04-20",
                'Imagen'=>"Godofwar.jpg"
            ],
            [
                'Nombre'=>"The Legend of Zelda: Breath of the Wild",
                'Genero'=>"Aventura",
                'Descripcion'=>"Link despierta tras un profundo sueño de 100 años en un misterioso templo en el reino de Hyrule; junto a él, deberemos descubrir su pasado mientras escuchamos una voz que nos incita a enfrentarnos a un malvado ser que provocó el llamado cataclismo: Ganon.",
                'Fecha_salida'=>"2017-03-03",
                'Imagen'=>"BreathoftheWild.jpg"
            ],
            [
                'Nombre'=>"Sekiro: Shadows Die Twice",
                'Genero'=>"Accion",
                'Descripcion'=>"Está ambientado en un Japón del periodo Sengoku a finales del siglo XVI. Su protagonista es un shinobi que fue dado por muerto después de que su señor fuera secuestrado y su brazo cercenado por un líder samurái del Clan Ashina.",
                'Fecha_salida'=>"2019-03-22",
                'Imagen'=>"Sekiro.jpg"
            ],
            [
                'Nombre'=>"Elden Ring",
                'Genero'=>"Aventura",
                'Descripcion'=>"Juego de mundo abierto de FromSoftware de extrema dificulta en la que tendremos que convertirnos en señor del circulo",
                'Fecha_salida'=>"2022-02-25",
                'Imagen'=>"EldenRing.jpg"
            ],
            [
                'Nombre'=>"NieR: Automata",
                'Genero'=>"Hack and slash",
                'Descripcion'=>"La historia gira en torno a una guerra entre los androides remanentes de la humanidad y un ejército de máquinas invasoras de otro mundo. La irrupción inicial de éstas obligó a la población de la Tierra a huir hacia la Luna. Con el fin de volver a recuperar el planeta, la humanidad creó el escuadrón «YoRHa», una unidad integrada por androides de combate con el fin de luchar en una guerra subsidiaria.",
                'Fecha_salida'=>"2017-02-23",
                'Imagen'=>"NierAutomata.jpg"
            ],
            [
                'Nombre'=>"Devil May Cry",
                'Genero'=>"Hack and slash",
                'Descripcion'=>"Su nombre es Dante y es el mejor en su trabajo: cazar demonios. Como propietario de la pequeña empresa Devil May Cry, sus perpetuas deudas le obligan a aceptar todo tipo de misiones. Pero una vez contratado, sus pistolas gemelas, Marfil y ébano, y su mortífera espada Rebelión, jamás perdonan.",
                'Fecha_salida'=>"2001-08-23",
                'Imagen'=>"DevilMayCry.jpg"
            ],
            [
                'Nombre'=>"Escape from Tarkov",
                'Genero'=>"Accion",
                'Descripcion'=>"Es un videojuego de acción bélica multijugador en primera persona para PC desarrollado por Developer Battlestate Games que nos trasladará a la abandonada ciudad de Tarkov, en Rusia, en una lucha sin cuartel entre facciones, guerrillas locales y otros enemigos.",
                'Fecha_salida'=>"2017-07-27",
                'Imagen'=>"EscapeFromTarkov.jpg"
            ],
            [
                'Nombre'=>"Minecraft",
                'Genero'=>"Supervivencia",
                'Descripcion'=>"Es un videojuego de mundo abierto donde la exploración y las construcciones son fundamentales. Creado por Markus <<Notch>> Persson, nos permite desarrollar nuestros propios universos fantásticos y artísticos, mediante la colocación y destrucción de bloques.",
                'Fecha_salida'=>"2011-11-18",
                'Imagen'=>"Minecraft.jpg"
            ],
            [
                'Nombre'=>"Rust",
                'Genero'=>"Supervivencia",
                'Descripcion'=>"Es una aventura de acción y supervivencia en primera persona de corte sandbox en el que debemos colaborar con otros jugadores en un mundo persistente en el que el único objetivo es sobrevivir.",
                'Fecha_salida'=>"2013-12-11",
                'Imagen'=>"Rust.jpg"
            ],
            [
                'Nombre'=>"The Legend Of Zelda Ocarina Of Time",
                'Genero'=>"Aventura",
                'Descripcion'=>"La historia del juego se enfoca en el joven héroe Link, quien emprende una aventura en el reino de Hyrule para detener a Ganondorf, rey de la tribu Gerudo, antes de que encuentre la Trifuerza, una reliquia sagrada capaz de concederle cualquier deseo a su poseedor. Para ello, debe viajar a través del tiempo y explorar varios calabozos con el fin de despertar a algunos sabios que tienen el poder para aprisionar de forma definitiva a Ganondorf.",
                'Fecha_salida'=>"1998-11-21",
                'Imagen'=>"Ocarinaoftime.jpg"
            ],
            [
                'Nombre'=>"Dofus",
                'Genero'=>"Rol",
                'Descripcion'=>"Es un juego de rol, en el que los jugadores encarnan uno o más caracteres. Incluye una gran cantidad de armas y equipos de todo tipo, profesiones y cientos de monstruos diferentes divididos en diferentes áreas que forman el mundo Dofus. Con una variedad de razas en busca de los dofus en ayuda de tus amigos.",
                'Fecha_salida'=>"2004-09-22",
                'Imagen'=>"Dofus.jpg"
            ],
            [
                'Nombre'=>"Counter-Strike: Global Offensive",
                'Genero'=>"Accion",
                'Descripcion'=>"Es un videojuego de acción shooter en primera persona. Cuarta entrega de la saga de Valve, CSGO repite el planteamiento de siempre: dos equipos, terroristas y antiterroristas, luchando entre sí por cumplir objetivos como plantar/ desactivar una bomba. ",
                'Fecha_salida'=>"2012-08-21",
                'Imagen'=>"CSGO.jpg"
            ],
            [
                'Nombre'=>"The Witcher 3: Wild Hunt",
                'Genero'=>"Aventura",
                'Descripcion'=>"La historia se centra en el personaje Geralt de Rivia, quien recibe una carta de su amante Yennefer de Vengerberg diciendo que necesita localizarlo lo antes posible. Geralt, después de encontrar a su amante, aprende que Ciri, nieta de Calenthe y exalumna del mismo personaje, es buscada por La Cacería Salvaje, un grupo antiguo de espectros que están liderados por el Rey de La Cacería Salvaje.",
                'Fecha_salida'=>"2015-05-18",
                'Imagen'=>"Thewitcher3.jpg"
            ],
            [
                'Nombre'=>"Terraria",
                'Genero'=>"Supervivencia",
                'Descripcion'=>"¡Cava, lucha, explora, construye! Nada es imposible en este juego de aventuras repleto de acción. El mundo es tu lienzo y la tierra misma es tu pintura. ¡Coge tus herramientas y adelante! Crea armas para deshacerte de una gran variedad de enemigos en numerosos ecosistemas.",
                'Fecha_salida'=>"2011-05-16",
                'Imagen'=>"Terraria.jpg"
            ]
            ];
        db::table('juegos')->insert($data);
    }
}