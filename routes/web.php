<?php

use Sienekib\Mehael\Router\Anotation\Route;
use App\Http\Controllers\app;
use App\Http\Controllers\authentication;
use App\Http\Controllers\contas;
use App\Http\Controllers\templates;

Route::add('GET', '/', [authentication::class, 'login']);

Route::add('GET', '/nocode', [app::class, 'index']);
Route::add('GET', '/login', [authentication::class, 'login']);
Route::add('POST', '/login_entrar', [authentication::class, 'login_entrar']);
Route::add('GET', '/register', [authentication::class, 'register']);
Route::add('POST', '/register', [authentication::class, 'criar_conta']);

Route::prefix('templates')->group('auth:authorize', function () {
    Route::add('GET', '/list', [templates::class, 'listar_todos']);
    //Route::add('GET', '/re/(res:alpha)', [templates::class, 'response_front']);
    Route::add('GET', '/add', [templates::class, 'add_template']);
    Route::add('POST', '/create', [templates::class, 'store']);
    Route::add('GET', '/edit', [templates::class, 'update']);
    Route::add('GET', '/categoria', [templates::class, 'get_categorias']); // named_routes
});

Route::group('auth:authorize', function() {
    Route::add('GET', '/parceiros', [app::class, 'parceiros']);
});

Route::prefix('planos')->group('auth:authorize', function () {
    Route::add('GET', '', [app::class, 'planos']);
    Route::add('GET', '/aderidos', [app::class, 'planos_aderidos']);
});

Route::add('GET', '/logout', [authentication::class, 'logout']);
