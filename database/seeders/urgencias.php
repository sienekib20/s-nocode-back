<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\DB;

class urgencias
{
	public function run()
	{
		DB::table('urgencias')->insert([
			
			[
				'urgencia' => 'Alta'
			],
			[
				'urgencia' => 'Normal'
			],
			[
				'urgencia' => 'Baixa'
			],

		]);
	}
}