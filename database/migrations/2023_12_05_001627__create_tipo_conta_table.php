<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateTipoContasTable
{
	public function up()
	{
		Schema::create('tipo_contas', "
			`tipo_conta_id` int(11) not null auto_increment,
            `tipo_conta` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`tipo_conta_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('tipo_contas');
	}
}