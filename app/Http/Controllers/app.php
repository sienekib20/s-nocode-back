<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Sienekib\Mehael\Database\Factory\DB;
use Sienekib\Mehael\Http\Request;

class app extends Controller
{
    public function testing(Request  $request)
    {
        //dd($_FILES);
    }
    
    public function index()
    {
        $templates = DB::raw('select t.template_id, t.titulo, t.autor, (select file from files where file_id = t.file_id) as file, (select tipo_template from tipo_templates where tipo_template_id = t.tipo_template_id) as tipo_template, t.referencia from templates as t');

        $em_uso = DB::table('temp_parceiros')->get();
        $parceiros = DB::table('parceiros')->get();

        return view('Inicio:app.index', compact('templates', 'em_uso', 'parceiros'));
    }

    public function sms()
    {
        $mensagens = DB::table('mensagens')->get();

        return view('Mensagem:app.mensagem.mensagem', compact('mensagens'));
    }

    public function create_template()
    {
        return view('app.templates.add-template');
    }

    public function parceiros()
    {
        $parceiros = DB::raw('select c.*, (select count(adesao_pacote_id) from adesao_pacotes where cliente_id = c.conta_id) as aderidos, (select count(temp_parceiro_id) from temp_parceiros where parceiro_id = c.conta_id) as qtd from contas as c where conta_id = (select p.conta_id from parceiros as p where c.conta_id = p.conta_id)');

        return view('Parceiros:app.parceiros.index', compact('parceiros'));
    }

    public function planos()
    {
        $pacotes = DB::table('pacotes')->get();

        return view('Pacotes:app.pacotes.planos', compact('pacotes'));
    }

    public function planos_aderidos()
    {
        $aderidos = DB::raw('select adesao_pacote_id, (select nome from contas where conta_id = ap.cliente_id) as parceiro, (select pacote from pacotes where pacote_id = ap.pacote_id) as plano, (select estado_pacote from estado_pacotes where estado_pacote_id = ap.estado_pacote) as state from adesao_pacotes as ap');

        return view('Pacotes aderidos:app.pacotes.aderidos', compact('aderidos'));
    }
}
