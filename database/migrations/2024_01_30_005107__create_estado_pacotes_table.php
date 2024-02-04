<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateEstadoPacotesTable
{
	public function up()
	{
		Schema::create('estado_pacotes', "
			`estado_pacote_id` int(11) not null auto_increment,
			`estado_pacote` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`estado_pacote_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('estado_pacotes');
	}
}