<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\DB;

class tipo_templates
{
	public function run()
	{
		DB::table('tipo_templates')->insert([
			[
				'tipo_template' => 'Landing Page',
                'preco' => '1000.00'
			],
			[
				'tipo_template' => 'Dashboard',
                'preco' => '1000.00'
			],
			[
				'tipo_template' => 'Website',
                'preco' => '1000.00'
			],
			[
				'tipo_template' => 'E-Commerce',
                'preco' => '1000.00'
			],
			[
				'tipo_template' => 'Single Page',
                'preco' => '1000.00'
			],
			[
				'tipo_template' => 'Portfólio',
                'preco' => '1000.00'
			],
			[
				'tipo_template' => 'Plataforma',
                'preco' => '1000.00'
			],
			[
				'tipo_template' => 'outro',
                'preco' => '1000.00'
			]
		]);
	}
}