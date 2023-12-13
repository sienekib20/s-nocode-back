<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateFilesTable
{
    public function up()
    {
        Schema::create('files', "
			`file_id` int(11) not null auto_increment,
			`file` varchar(250) not null,
			`extensao` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`file_id`)
		");
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
