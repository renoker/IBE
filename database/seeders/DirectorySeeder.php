<?php

namespace Database\Seeders;

use App\Models\Directory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Directory::create([
            'categorie_id'  => 1,
            'image'         => 'images/maquinas/Maq_1.png',
            'name'          => 'Cepilladora de fruta',
            'model'         => 'PRODBR-XS',
            'fabricacion'   => 'De acuerdo con necesidades del cliente o producción asignada',
            'capacidad'     => 'Acero inoxidable 304T.',
            'componentes'   => 'Acero inoxidable grado alimenticio',
            'objetivo'      => 'La despulpadora automática está diseñada para extraer la pulpa del aguacate. Este proceso de despulpado consiste en extraer de la cascara, la mayor parte de solido.',
            'order'         =>  1,
        ]);

        Directory::create([
            'categorie_id'  => 1,
            'image'         => 'images/maquinas/Maq_2.png',
            'name'          => 'Cepilladora de fruta',
            'model'         => 'PRODBR-XS',
            'fabricacion'   => 'Fabricado en acero inoxidable.',
            'capacidad'     => 'Acero inoxidable 304T.',
            'componentes'   => 'Acero inoxidable 304',
            'objetivo'      => 'La cortadora de cocos IBE SOLUTIONS está compuesta por un sistema de cinta dentada que alinea la fruta hacia un bloque de cuchillas. El sistema de transporte es giratorio y gracias a la forma de los raíles, los productos se alinean',
            'order'         =>  2,
        ]);

        Directory::create([
            'categorie_id'  => 1,
            'image'         => 'images/maquinas/Maq_3.png',
            'name'          => 'Cortadora de mitades',
            'model'         => 'PRODBR-XS',
            'fabricacion'   => 'Acero inoxidable 304',
            'capacidad'     => '1 línea -1 ton/hr 2 líneas-2 ton/hrz',
            'componentes'   => 'Acero inoxidable 304',
            'objetivo'      => 'La cortadora de cocos IBE SOLUTIONS está compuesta por un sistema de cinta dentada que alinea la fruta hacia un bloque de cuchillas. El sistema de transporte es giratorio y gracias a la forma de los raíles, los productos se alinean',
            'order'         =>  3,
        ]);

        Directory::create([
            'categorie_id'  => 1,
            'image'         => 'images/maquinas/Maq_4.png',
            'name'          => 'Transportador de rodillos pre selección',
            'model'         => 'PRODBR-XS',
            'fabricacion'   => 'Acero inoxidable 304',
            'capacidad'     => 'De acuerdo a las necesidades del cliente',
            'componentes'   => 'Acero inoxidable 304',
            'objetivo'      => 'Este elemento se puede fabricar para diferentes tipos de procesos: Elevador para destupado, Pum pre selección, Desbasurado.',
            'order'         =>  4,
        ]);

        Directory::create([
            'categorie_id'  => 1,
            'image'         => 'images/maquinas/Maq_5.png',
            'name'          => 'Volteadora de cajas',
            'model'         => 'PRODBR-XS',
            'fabricacion'   => 'Acero inoxidable 304',
            'capacidad'     => '18 a 30 cajas/minuto',
            'componentes'   => 'Acero al carbón A36, rodillos de PVC o acero inoxidable.',
            'objetivo'      => 'Automatiza el volteado de cajas girándolas lentamente y mantiene un ritmo de alimentación 18 a 30 cajas/minuto, cuenta con salida de caja mediante banda de rodillos.',
            'order'         =>  5,
        ]);

        Directory::create([
            'categorie_id'  => 1,
            'image'         => 'images/maquinas/Maq_6.png',
            'name'          => 'Secador de fruta',
            'model'         => 'PRODBR-XS',
            'fabricacion'   => 'Acero al carbón',
            'capacidad'     => 'De acuerdo a Producción.',
            'componentes'   => 'Acero al carbón .',
            'objetivo'      => 'Manufactura de periferico para secado de fruta, el cual se puede adaptar a líneas existentes o integrarse a proyectos llave en mano. Funcional, versatil y con un desempeño',
            'order'         =>  6,
        ]);

        Directory::create([
            'categorie_id'  => 1,
            'image'         => 'images/maquinas/Maq_7.png',
            'name'          => 'Secador de fruta',
            'model'         => 'PRODBR-XS',
            'fabricacion'   => 'De acuerdo con necesidades del cliente o producción asignada',
            'capacidad'     => 'Acero inoxidable 304T.',
            'componentes'   => 'Acero inoxidable grado alimenticio',
            'objetivo'      => 'La despulpadora automática está diseñada para extraer la pulpa del aguacate. Este proceso de despulpado consiste en extraer de la cascara, la mayor parte de solido.',
            'order'         =>  7,
        ]);

        Directory::create([
            'categorie_id'  => 1,
            'image'         => 'images/maquinas/Maq_8.png',
            'name'          => 'Secador de fruta',
            'model'         => 'PRODBR-XS',
            'fabricacion'   => 'Acero inoxidable 304',
            'capacidad'     => '24 bolsas/min (cada bolsa de 1Lb)',
            'componentes'   => 'Transportador de 1 espiral, con dimensiones de banda de 24" con un trayecto efectivo de 16Mts. Aprox, un diámetro aprox. de 3.55m de espiral.  ',
            'objetivo'      => 'La despulpadora automática está diseñada para extraer la pulpa del aguacate. Este proceso de despulpado consiste en extraer de la cascara, la mayor parte de solido.',
            'order'         =>  8,
        ]);
    }
}
