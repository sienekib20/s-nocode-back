<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateTemplatesTable
{
	public function up()
	{
		Schema::create('templates', "
			`template_id` int(11) not null auto_increment,
			`uuid` varchar(250) not null,
			`titulo` varchar(250) not null,
			`autor` varchar(250) not null,
			`referencia` varchar(191) not null unique,
			`editar` enum('YES', 'NO') not null,
			`status` enum('Grátis', 'Pago') not null,
			`preco` decimal(10.2) not null default 0.00,
			`descricao` varchar(250) not null,
            `template` text not null,
			`tipo_template_id` int(11) not null,
			`file_id` int(11) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`template_id`),
			foreign key(`file_id`) references files(`file_id`),
			foreign key(`tipo_template_id`) references tipo_templates(`tipo_template_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('templates');
	}
}