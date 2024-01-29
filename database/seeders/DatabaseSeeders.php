<?php

namespace Database\Factory;

use Sienekib\Mehael\Database\Factory\Seeder;

class DatabaseSeeders extends Seeder
{
    public function seed()
    {
        $this->call([
            // Coloque aqui os teus seeders
            users::class,
            tipo_templates::class,
            tipo_contas::class,
            pacotes::class
        ]);
    }

}
