<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelecaoController extends Controller
{
    public function index()
    {
        return view('Selecao.index');
    }
    public function completo()
    {
        return view('Selecao.completo');
    }
    public function contra_dominante()
    {
        return view('Selecao.contra_dominante');
    }
    public function contra_recessivo_parcial()
    {
        return view('Selecao.contra_recessivo_parcial');
    }
    public function contra_recessivo_completo()
    {
        return view('Selecao.contra_recessivo_completo');
    }
}
