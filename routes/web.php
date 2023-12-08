<?php

use Sienekib\Mehael\Router\Anotation\Route;
use App\Http\Controllers\app;
use App\Http\Controllers\authentication;
use App\Http\Controllers\contas;
use App\Http\Controllers\templates;

Route::add('GET', '/', [app::class, 'index']);
Route::add('GET', '/nocode', [app::class, 'index']);
Route::add('GET', '/login', [authentication::class, 'login']);

Route::add('POST', '/login_entrar', [authentication::class, 'login_entrar']);

Route::add('GET', '/register', [authentication::class, 'register']);
Route::add('POST', '/register', [authentication::class, 'criar_conta']);

Route::prefix('templates')->group('auth:authorize', function() {
    Route::add('GET', '/list', [templates::class, 'listar_todos']);
    Route::add('GET', '/add', [templates::class, 'add_template']);
    Route::add('POST', '/edit', [templates::class, 'update']);
});

Route::group('auth:authorize', function() {
    Route::add('GET', '/user/(id:numeric)', [contas::class, 'index']);
    Route::add('GET', '/template/create', [TemplateController::class, 'index']);
    Route::add('GET', '/template/add', [TemplateController::class, 'create']);
    Route::add('GET', '/parceiros', [contas::class, 'parceiros']);
});

Route::add('GET', '/logout', [authentication::class, 'logout']);