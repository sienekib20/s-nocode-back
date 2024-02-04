<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Sienekib\Mehael\Http\Request;
use Sienekib\Mehael\Database\Factory\DB;

class authentication extends Controller
{

    public function login()
    {
        return view('Entrar:app.auth.login');
    }

    public function login_entrar(Request $request)
    {
        $data = DB::table('users')->select('*')->where('username', '=', $request->username)->get();

        if (empty($data)) {
            flash()->setFlashMessage('erro', 'credenciais inválidas');
            return redirect()->route('login');
        }

        $data = $data[0];

        if (password_verify($request->password, $data->password)) {


            session()->set('username', $data->username);
            session()->set('user_id', $data->user_id); //->regenerateId();

            if (session()->has('redirect_url')) {
                $redirect_url = session()->get('redirect_url');
                session()->remove('redirect_url');
                return redirect()->route($redirect_url);
            }
            
            return redirect()->route('nocode');
        }

        flash()->setFlashMessage('erro', 'credenciais inválidas');
        return redirect()->route('login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->route('/');
    }
}
