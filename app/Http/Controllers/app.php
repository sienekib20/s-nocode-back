<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Sienekib\Mehael\Database\Factory\DB;
use Sienekib\Mehael\Http\Request;

class app extends Controller
{
    public function testing(Request  $request)
    {
        dd($_FILES);
    }
    
    public function index()
    {
        

        $templates = DB::raw('select t.template_id, t.titulo, t.autor, (select file from files where file_id = t.file_id) as file, (select tipo_template from tipo_templates where tipo_template_id = t.tipo_template_id) as tipo_template, t.referencia from templates as t');

        $em_uso = DB::table('temp_parceiros')->get();
        $parceiros = DB::table('parceiros')->get();

        return view('home:app.index', compact('templates', 'em_uso', 'parceiros'));
    }

    public function create_template()
    {

        return view('app.templates.add-template');
    }

    public function update($request)
    {
    }
}
