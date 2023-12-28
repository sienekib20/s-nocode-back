<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateEditadosTable
{
	public function up()
	{
		Schema::create('editados', "
			`editado_id` int(11) not null auto_increment,
			`template_id` int(11) not null,
			`parceiro_id` int(11) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`editado_id`),
            foreign key(`template_id`) references templates(`template_id`),
            foreign key(`parceiro_id`) references parceiros(`parceiro_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('editados');
	}
}