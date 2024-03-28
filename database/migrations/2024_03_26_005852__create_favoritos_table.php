<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateFavoritosTable
{
    public function up()
    {
        Schema::create('favoritos', "
			`favorito_id` int(11) not null auto_increment,
			`user` int(11) not null,
            `template` int(11) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`favorito_id`),
            foreign key(`user`) references contas(`conta_id`),
            foreign key(`template`) references templates(`template_id`)
		");
    }

    public function down()
    {
        Schema::dropIfExists('favoritos');
    }
}
