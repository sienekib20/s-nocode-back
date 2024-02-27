<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\DB;

class categorias
{
	public function run()
	{
		DB::table('categorias')->insert([
			[
				'categoria' => 'Arte & Design'
			],
			[
				'categoria' => 'Technologia'
			],
			[
				'categoria' => 'Negócios & Lei'
			],
			[
				'categoria' => 'Alimentos & Restaurante'
			],
			[
				'categoria' => 'Arquitectura & Construção'
			],
			[
				'categoria' => 'Moda & Beleza'
			],
			[
				'categoria' => 'Educação'
			],
			[
				'categoria' => 'Industrial'
			],
			[
				'categoria' => 'Interior'
			],
			[
				'categoria' => 'Carros & Transporte'
			],
			[
				'categoria' => 'Viagem & Hotéis'
			],
			[
				'categoria' => 'Música & Entretenimento'
			],
			[
				'categoria' => 'Desportos'
			],
			[
				'categoria' => 'Vendas'
			],
			[
				'categoria' => 'Medicina & Ciência'
			],
			[
				'categoria' => 'Natureza'
			],
			[
				'categoria' => 'Real Estate'
			],
			[
				'categoria' => 'Casamentos'
			],
			[
				'categoria' => 'Pets & Animais'
			],
			[
				'categoria' => 'Portfolio'
			],
		]);
	}
}