<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateLeadsTable
{
    public function up()
    {
        Schema::create('leads', "
			`lead_id` int(11) not null auto_increment,
            `conta_id` int(11) not null,
			`username` varchar(250) not null,
			`email` varchar(250) not null,
			`telefone` varchar(250) not null,
			`mensagem` text not null,
            `status` int(11) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`lead_id`),
            foreign key(`conta_id`) references contas(`conta_id`)
		");
    }

    public function down()
    {
        Schema::dropIfExists('leads');
    }
}