<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateAdesaoPacotesTable
{
	public function up()
	{
		Schema::create('adesao_pacotes', "
			`adesao_pacote_id` int(11) not null auto_increment,
			`cliente_id` int(11) not null,
			`pacote_id` int(11) not null,
            `estado_pacote` int(11) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`adesao_pacote_id`),
            foreign key(`cliente_id`) references contas(`conta_id`),
            foreign key(`pacote_id`) references pacotes(`pacote_id`),
            foreign key(`estado_pacote`) references estado_pacotes(`estado_pacote_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('adesao_pacotes');
	}
}