<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateClassificacaosTable
{
	public function up()
	{
		Schema::create('classificacaos', "
			`classificacao_id` int(11) not null auto_increment,
            `classificacao` varchar(250) not null default 'Normal',
			`template_id` int(11) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`classificacao_id`),
            foreign key(`template_id`) references templates(`template_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('classificacaos');
	}
}