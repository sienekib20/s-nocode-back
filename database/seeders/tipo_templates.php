<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\DB;

class tipo_templates
{
	public function run()
	{
		DB::table('tipo_templates')->insert([
			[
				'tipo_template' => 'Landing Page'
			],
			[
				'tipo_template' => 'Dashboard'
			],
			[
				'tipo_template' => 'Website'
			],
			[
				'tipo_template' => 'E-Commerce'
			],
			[
				'tipo_template' => 'Single Page'
			],
			[
				'tipo_template' => 'Portfólio'
			],
			[
				'tipo_template' => 'Plataforma'
			],
			[
				'tipo_template' => 'outro'
			]
		]);
	}
}