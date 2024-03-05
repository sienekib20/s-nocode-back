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

    public function get_cat_type()
    {
        $categorias = DB::table('categorias')->get();

        return view('Categorias:app.templates.type-cat', compact('categorias'));
    }

    public function update_categoria(Request $request)
    {
        $responseDB = DB::table('tipo_templates')
            ->where('tipo_template_id', '=', $request->id)
            ->update(['tipo_template' => $request->categoria, 'preco' => $request->preco, 'updated_at' => date('Y-m-d H:i:s')]);

            $response = (is_null($responseDB)) ? 'ok' : 'no';
            return response()->json($response);
    }

    public function update_cat_type(Request $request)
    {
        $responseDB = DB::table('categorias')
            ->where('categoria_id', '=', $request->id)
            ->update(['categoria' => $request->categoria, 'preco' => $request->preco, 'updated_at' => date('Y-m-d H:i:s')]);

            $response = (is_null($responseDB)) ? 'ok' : 'no';
            return response()->json($response);
    }


    public function get_editados()
    {
        $editados = DB::raw('select t.*, (select tipo_template from tipo_templates where tipo_template_id = t.tipo_template_id) as tipo from templates as t where template_id = (select template_id from temp_parceiros where template_id = t.template_id limit 1)');

        return view('Categorias:app.templates.editados', compact('editados'));
    }

    public function get_em_uso()
    {
        $editados = DB::raw('select t.*, (select tipo_template from tipo_templates where tipo_template_id = t.tipo_template_id) as tipo from templates as t where template_id = (select template_id from temp_parceiros where template_id = t.template_id limit 1)');

        dd('criar a tabela de templates publicados');

        return view('Categorias:app.templates.editados', compact('editados'));
    }

    public function response_front(Request $request)
    {
        //dd($request);
    }

    public function add_template()
    {

        $tipo = DB::table('tipo_templates')->get();
        $categorias = DB::table('categorias')->get();

        return view('Adicionar template:app.templates.add-template', compact('tipo', 'categorias'));
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