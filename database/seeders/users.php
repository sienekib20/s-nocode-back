<?php

namespace Database\Factory;
use Sienekib\Mehael\Support\Hash;
use Sienekib\Mehael\Database\Factory\DB;

class users
{
	public function run()
	{
		DB::table('users')->insert([
			
			// Coloque aqui os registros
			[
				'username' => 'admin',
				'email' => 'admin@dominio.com',
				'password' => Hash::encrypt('123456789')
			]

		]);
	}
}