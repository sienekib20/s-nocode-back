<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreatePacotesTable
{
	public function up()
	{
		Schema::create('pacotes', "
			`pacote_id` int(11) not null auto_increment,
            `pacote` varchar(250) not null,
            `descricao` text not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`pacote_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('pacotes');
	}
}