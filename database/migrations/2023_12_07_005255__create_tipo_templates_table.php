<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateTipoTemplatesTable
{
	public function up()
	{
		Schema::create('tipo_templates', "
			`tipo_template_id` int(11) not null auto_increment,
			`tipo_template` varchar(250) not null,
            `preco` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`tipo_template_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('tipo_templates');
	}
}