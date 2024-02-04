<?php

namespace App\Http\Middlewares\Auth;

use Sienekib\Mehael\Support\Session;
use Sienekib\Mehael\Http\Middlewares\Middleware as BaseMiddleware;
use Sienekib\Mehael\Http\Request;

class Authorize extends BaseMiddleware
{
    public function handle()
    {

        return $this->execute('user_id', new Request);
        $restricted = Session::has('user_id');

        if (!$restricted) {

            header('Location: /login');
            exit;
        }
    }
}
