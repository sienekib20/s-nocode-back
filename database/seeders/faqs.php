<?php

namespace Database\Factory;

use Ramsey\Uuid\Uuid;
use Sienekib\Mehael\Database\Factory\DB;

class faqs
{
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'uuid' => Uuid::uuid4()->toString(),
                'pergunta' => 'O que é preciso para começar?',
                'resposta' => 'Primeiro tens que ter uma conta no Sílica, depois escolha um plano (opcional), só assim que podes começar. para mais informações entre em <a href="<?= route(\'contactos\') ?>" style="color: #f71;">contacto</a>',
                'acesso' => 'liberado'
            ],
            [
                'uuid' => Uuid::uuid4()->toString(),
                'pergunta' => 'O meu site pára de funcionar, quando expirar o plano?',
                'resposta' => 'Antes que expire o teu plano receberas notificações antes do tempo, mas damos sempre um prazo considerável de 3 mêses aos nossos clientes, excepto quando estiveres a usar um plano grátis.',
                'acesso' => 'liberado'
            ],
            [
                'uuid' => Uuid::uuid4()->toString(),
                'pergunta' => 'Devo ter conhecimentos tenicos para editar o template?',
                'resposta' => 'Pensamos em si, podes não ter conhecimentos tecnicos, vais construir o teu template mesmo que começar do zero.',
                'acesso' => 'liberado'
            ],
            [
                'uuid' => Uuid::uuid4()->toString(),
                'pergunta' => 'Com quem posso partilhar o meu dóminio?',
                'resposta' => 'Podes divulgar o link do teu site com quem quizer, onde quizer, e qualquer um poderá acessar livremente',
                'acesso' => 'liberado'
            ],
            [
                'uuid' => Uuid::uuid4()->toString(),
                'pergunta' => 'Existem template para o meu tipo de negócio?',
                'resposta' => 'Nós damos a base, o alicerce com que vais edificar a sua casa, isto é, os templates são de carater aberto para adequá-los ao teu tipo de negócio.',
                'acesso' => 'liberado'
            ]
        ]);
    }
}
