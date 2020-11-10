<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = produto::paginate();
        return view('produtos.index', ['produtos' => $produtos]);
    }
    public function inserir()
    {
        return "inserir";
    }
    public function busca($id)
    {
        $produto = produto::find($id);
        return view('produtos.busca', ['produto' => $produto]);
    }
}
