<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Sienekib\Mehael\Http\Request;
use Sienekib\Mehael\Database\Factory\DB;

class templates extends Controller
{

    public function index()
    {
        $data = [];

        // TODO: coloque o seu código

        return view('titulo:caminho.da.tela', compact('data'));
    }

    public function listar_todos()
    {
        $templates = DB::raw('select t.*, (select tipo_template from tipo_templates where tipo_template_id = t.tipo_template_id) as tipo from templates as t');

        return view('Templates:app.templates.templates', compact('templates'));
    }

    public function get_categorias()
    {
        $categorias = DB::table('tipo_templates')->get();

        return view('Categorias:app.templates.categoria', compact('categorias'));
    }

    public function get_editados()
    {
        $categorias = DB::table('tipo_templates')->get();

        return view('Categorias:app.templates.editados', compact('categorias'));
    }

    public function response_front(Request $request)
    {
        //dd($request);
    }

    public function add_template()
    {

        $tipo = DB::table('tipo_templates')->get();

        return view('Adicionar template:app.templates.add-template', compact('tipo'));
    }

    // Pega um registo(s) na DB

    public function read(Request $request)
    {
        $data = [];

        // TODO: coloqe o seu código

        return response()->json($data);
    }

    // Atualizações de um ou + registos na DB

    public function update(Request $request)
    {
        // TODO: coloqe o seu código

        return redirect()->backWith('success', 'mensagem de sucesso');
    }

    // Apaga um registo na DB

    public function delete(Request $request)
    {
        DB::table('tabela')->where('id', '=', $request->id)->delete();

        // TODO: coloqe o seu código

        return redirect()->back();
    }
}
