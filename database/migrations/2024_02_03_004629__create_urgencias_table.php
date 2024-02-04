<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateUrgenciasTable
{
	public function up()
	{
		Schema::create('urgencias', "
			`urgencia_id` int(11) not null auto_increment,
			`urgencia` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`urgencia_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('urgencias');
	}
}