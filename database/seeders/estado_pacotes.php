<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\DB;

class estado_pacotes
{
	public function run()
	{
		DB::table('estado_pacotes')->insert([
            [
                'estado_pacote' => 'Em Análise'
            ],
            [
                'estado_pacote' => 'Aceite'
            ],
            [
                'estado_pacote' => 'Rejeitado'
            ]
		]);
	}
}