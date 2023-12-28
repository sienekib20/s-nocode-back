<?php
ini_set('session.gc_lifetime', 0);
ini_set('session.cookie_lifetime', 0);
ini_set('session.cookie_httponly', '1');
session_start();
/*
|--------------------------------------------
| Auto carregamento das classes
|--------------------------------------------
*/
require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------
| Responsável por todas as funcoes automáticas
|--------------------------------------------
*/
require __DIR__ . '/../src/Support/helpers.php';


// Carregando variáveis de ambiente

$env = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$env->load();


// Startando a aplicação

app()->start();
