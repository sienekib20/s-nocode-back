<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateSessionManagementsTable
{
	public function up()
	{
		Schema::create('session_managements', "
			`session_management_id` int(11) not null auto_increment,
            `session_id` varchar(250) null,
			`uuid` varchar(250) not null,
            `user_id` int(11) not null,
            `login_time` timestamp default current_timestamp,
            `logout_time` timestamp null default null,
            `ip_address` varchar(250) null,
            `user_agent` varchar(250) null,
            `is_active` bool default false,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`session_management_id`),
            index(`user_id`),
            index(`is_active`),
            foreign key(`user_id`) references contas(`conta_id`) on delete cascade
		");
	}

	public function down()
	{
		Schema::dropIfExists('session_managements');
	}
}