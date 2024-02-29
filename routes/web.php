<?php

use Sienekib\Mehael\Router\Anotation\Route;
use App\Http\Controllers\app;
use App\Http\Controllers\authentication;
use App\Http\Controllers\contas;
use App\Http\Controllers\templates;

Route::get('/', [authentication::class, 'login']);
Route::get('/login', [authentication::class, 'login']);
Route::post('/login', [authentication::class, 'login_entrar']);

Route::get('/nocode', [app::class, 'index']);
Route::get('/register', [authentication::class, 'register']);
Route::post('/register', [authentication::class, 'criar_conta']);

Route::prefix('templates')->group('auth:authorize', function () {
    Route::get('/list', [templates::class, 'listar_todos']);
    //Route::get('/re/(res:alpha)', [templates::class, 'response_front']);
    Route::get('/add', [templates::class, 'add_template']);
    Route::post('/create', [templates::class, 'store']);
    Route::get('/edited', [templates::class, 'get_editados']);
    Route::get('/used', [templates::class, 'get_em_uso']);
    Route::get('/categoria', [templates::class, 'get_categorias']); // named_routes
    Route::post('/categoria/update', [templates::class, 'update_categoria']); // named_routes
});

Route::group('auth:authorize', function () {
    Route::get('/parceiros', [app::class, 'parceiros']);
    Route::get('/mensagem', [app::class, 'sms']);
});

Route::prefix('planos')->group('auth:authorize', function () {
    Route::get('', [app::class, 'planos']);
    Route::get('/aderidos', [app::class, 'planos_aderidos']);
});

Route::get('/logout', [authentication::class, 'logout']);
