<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateContasTable
{
	public function up()
	{
		Schema::create('contas', "
			`conta_id` int(11) not null auto_increment,
			`uuid` varchar(250) not null,
			`nome` varchar(250) not null,
			`apelido` varchar(250) not null,
			`data_nasc` varchar(250) not null,
			`genero` enum('M', 'F') not null,
			`email` varchar(250) not null,
			`telefone` varchar(50) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`conta_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('contas');
	}
}