<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreateFaqsTable
{
    public function up()
    {
        Schema::create('faqs', "
			`faq_id` int(11) not null auto_increment,
			`uuid` varchar(250) not null,
            `pergunta` varchar(250) not null,
            `resposta` text null default 'Sem resposta',
            `descricao` text null default '',
            `acesso` varchar(250) not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`faq_id`)
		");
    }

    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
