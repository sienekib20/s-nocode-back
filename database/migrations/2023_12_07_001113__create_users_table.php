<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateUsersTable
{
	public function up()
	{
		Schema::create('users', "
			`user_id` int(11) not null auto_increment,
			`username` varchar(250) not null,
			`email` varchar(250) null,
			`password` varchar(250) not null,
			`token` varchar(250) null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`user_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('users');
	}
}