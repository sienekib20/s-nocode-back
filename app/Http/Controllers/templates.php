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
        $templates = DB::table('templates')->get();

        return view('Todos os template:app.templates.templates', compact('templates'));
    }

    public function add_template()
    {

        $tipo = DB::table('tipo_templates')->get();

        return view('Adicionar template:app.templates.add-template', compact('tipo'));
    }

    // Cria um registo na DB

    public function store(Request $request)
    {

        $build_file_template = "<style>{$request->css}</style>";
        $build_file_template .= $request->html;
        $build_file_template .= "<script>{$request->js}</script>";

        var_dump($build_file_template);
        exit;

        $fileId = DB::table('files')->insertId([]); // inserir file

        $result = DB::table('templates')->insert(['titulo' => $request->temp_title, 'referencia' => $request->generated, 'tipo_template_id' => $request->temp_type, 'editar' => $request->temp_editable, 'descricao' => $request->temp_description, 'preco' => $request->temp_price == null ? '0.00' : $request->temp_price, 'status' => $request->temp_payment_status]);

        if ($request == true) {

            return redirect()->route('rota.de.redirecionamento');
        }

        return redirect()->route('rota.de.redirecionamento');
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
