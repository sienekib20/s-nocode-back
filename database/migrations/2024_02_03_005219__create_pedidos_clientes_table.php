<?php

use Sienekib\Mehael\Database\Factory\Schema;

class CreatePedidosClientesTable
{
	public function up()
	{
		Schema::create('pedidos_clientes', "
			`pedidos_cliente_id` int(11) not null auto_increment,
			`expediente` int(11) not null,
			`sujeito` varchar(250) not null,
			`alvo` varchar(250) not null,
			`tipo_template_id` int(11) not null,
            `categoria_id` int(11) not null,
			`prazo` varchar(250) not null,
            `preco` varchar(250) not null,
            `urgencia_id` int(11) not null,
			`descricao` text not null,
			`created_at` timestamp not null default current_timestamp,
			`updated_at` timestamp null,
			primary key(`pedidos_cliente_id`),
			foreign key(`expediente`) references contas(`conta_id`),
			foreign key(`tipo_template_id`) references tipo_templates(`tipo_template_id`),
            foreign key(`categoria_id`) references categorias(`categoria_id`),
            foreign key(`urgencia_id`) references urgencias(`urgencia_id`)
		");
	}

	public function down()
	{
		Schema::dropIfExists('pedidos_clientes');
	}
}