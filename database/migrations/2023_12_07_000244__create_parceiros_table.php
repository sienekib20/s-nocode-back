<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateParceirosTable
{
	public function up()
	{
		Schema::create('parceiros', "
			`parceiro_id` int(11) not null auto_increment,
			`uuid` varchar(250) not null,
			`conta_id` int(11) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`parceiro_id`),
			foreign key(`conta_id`) references contas(`conta_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('parceiros');
	}
}