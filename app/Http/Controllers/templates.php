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

        return view('Todos os template:app.templates.templates', compact('templates'));
    }

    public function response_front(Request $request)
    {
        dd($request);
    }

    public function add_template()
    {

        $tipo = DB::table('tipo_templates')->get();

        return view('Adicionar template:app.templates.add-template', compact('tipo'));
    }

    // Cria um registo na DB

    public function store(Request $request)
    {
        /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arquivo_zip = $_FILES["zip"]["tmp_name"];
            $destino = storage_path(); // Substitua pelo caminho real

            //dd(pathinfo($_FILES["zip"]["name"], PATHINFO_EXTENSION));
            //dd($_FILES["zip"]["name"]);
            
            // Verifica se o arquivo é um arquivo zip
            if (pathinfo($_FILES["zip"]["name"], PATHINFO_EXTENSION) == 'zip') {
                // Descompacta o arquivo zip
                $zip = new \ZipArchive;
                if ($zip->open($arquivo_zip) === TRUE) {
                    //dd($zip->filename);
                    $zip->extractTo($destino);
                    $zip->close();
                    echo 'Arquivo zip descompactado com sucesso!';
                } else {
                    echo 'Falha ao descompactar o arquivo zip.';
                }
            } else {
                echo 'Por favor, envie um arquivo zip válido.';
            }
        }*/
        
        return 0;

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
