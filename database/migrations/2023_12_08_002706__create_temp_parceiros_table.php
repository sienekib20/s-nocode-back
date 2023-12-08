<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateTempParceirosTable
{
	public function up()
	{
		Schema::create('temp_parceiros', "
			`temp_parceiro_id` int(11) not null auto_increment,
			`parceiro_id` int(11) not null,
			`template_id` int(11) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`temp_parceiro_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('temp_parceiros');
	}
}