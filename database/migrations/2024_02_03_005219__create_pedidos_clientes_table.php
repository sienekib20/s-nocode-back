<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreatePedidosClientesTable
{
	public function up()
	{
		Schema::create('pedidos_clientes', "
			`pedidos_cliente_id` int(11) not null auto_increment,
			`sujeito` varchar(250) not null,
			`template` int(11) not null,
			`alvo` varchar(250) not null,
			`prazo` varchar(250) not null,
			`expediente` int(11) not null,
			`mail` varchar(250) not null,
			`telefone` varchar(250) not null,
			`descricao` text not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`pedidos_cliente_id`),
			foreign key(`expediente`) references contas(`conta_id`),
			foreign key(`template`) references tipo_templates(`tipo_template_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('pedidos_clientes');
	}
}