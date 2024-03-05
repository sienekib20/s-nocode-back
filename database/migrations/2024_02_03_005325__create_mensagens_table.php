<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateMensagensTable
{
	public function up()
	{
		Schema::create('mensagens', "
			`mensagen_id` int(11) not null auto_increment,
            `conta_id` int(11) not null,
			`expediente` varchar(250) not null,
			`mail` varchar(250) not null,
			`telefone` varchar(250) not null,
			`mensagem` text not null,
            `causas` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`mensagen_id`),
            foreign key(`conta_id`) references contas(`conta_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('mensagens');
	}
}