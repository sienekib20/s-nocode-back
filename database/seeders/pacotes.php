<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\DB;

class pacotes
{
	public function run()
	{
		DB::table('pacotes')->insert([
			[
                'pacote' => 'Grátis',
                'preco' => '1000',
                'descricao' => '1 Template no máximo;Domínio válido por 30 dias;Edição limitada;Sem suporte'
            ],
            [
                'pacote' => 'Básico',
                'preco' => '5000',
                'descricao' => '3 Template no máximo;Domínio válido por 90 dias;Edição limitada;Sem suporte'
            ],
            [
                'pacote' => 'Big',
                'preco' => '7000',
                'descricao' => '5 Template no máximo;Domínio válido por 160 dias;Edição ilimitada;Suporte técnico'
            ],
		]);
	}
}