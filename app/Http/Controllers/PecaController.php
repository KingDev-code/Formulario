<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Peca;

class PecaController extends Controller
{
    public function index() {

        $peca = Peca::all();

        return view('welcome', ['peca' => $peca]);
    }

    public function create() {

        return view('/');
    }

    public function store(request $request) {

        $peca = new Peca;

        $peca->tipo = $request->tipo;
        $peca->nome = $request->nome;
        $peca->valor = $request->valor;

        $peca->save();

        return redirect('/');
    }
}
