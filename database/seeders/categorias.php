<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\DB;

class categorias
{
	public function run()
	{
		DB::table('categorias')->insert([
			[
				'categoria' => 'Arte & Design',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Technologia',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Negócios & Lei',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Alimentos & Restaurante',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Arquitectura & Construção',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Moda & Beleza',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Educação',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Industrial',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Interior',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Carros & Transporte',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Viagem & Hotéis',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Música & Entretenimento',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Desportos',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Vendas',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Medicina & Ciência',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Natureza',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Real Estate',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Casamentos',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Pets & Animais',
                'preco' => '1000.00'
			],
			[
				'categoria' => 'Portfolio',
                'preco' => '1000.00'
			],
		]);
	}
}