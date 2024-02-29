<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateCategoriasTable
{
	public function up()
	{
		Schema::create('categorias', "
			`categoria_id` int(11) not null auto_increment,
			`categoria` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`categoria_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('categorias');
	}
}