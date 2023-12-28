<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\DB;

class tipo_contas
{
    public function run()
    {
        DB::table('tipo_contas')->insert([
            [
                'tipo_conta' => 'Nova'
            ],
            [
                'tipo_conta' => 'Sílica'
            ],
        ]);
    }
}
