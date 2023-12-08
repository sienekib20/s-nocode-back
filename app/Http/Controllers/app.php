<?php

namespace App\Http\Controllers;

use Sienekib\Mehael\Database\Factory\DB;

class app extends Controller
{
    public function index()
    {
        $templates = DB::raw('select t.template_id, t.titulo, t.autor, (select file from files where file_id = t.file_id) as file, (select tipo_template from tipo_templates where tipo_template_id = t.tipo_template_id) as tipo_template, t.referencia from templates as t');

        return view('home:app.index', compact('templates'));
    }

    public function create_template()
    {

        return view('app.templates.add-template');
    }

    public function update($request)
    {
    }
}
