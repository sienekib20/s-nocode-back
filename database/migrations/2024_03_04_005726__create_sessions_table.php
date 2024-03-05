<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateSessionsTable
{
	public function up()
	{
		Schema::create('sessions', "
			`session_id` int(11) not null auto_increment,
			`uuid` varchar(250) not null,
            `session_key` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`session_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('sessions');
	}
}