<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateNotifcacoesTable
{
	public function up()
	{
		Schema::create('notifcacoes', "
			`notifcacoe_id` int(11) not null auto_increment,
			`conta_id` int(11) not null,
			`urgencia_id` int(11) not null,
			`notificacao` tinytext not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`notifcacoe_id`),
			foreign key(`conta_id`) references contas(`conta_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('notifcacoes');
	}
}