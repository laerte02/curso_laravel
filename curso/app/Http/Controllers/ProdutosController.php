<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        return view('produtos.index');
    }
    public function inserir(){
        return "inserir";
    }
    public function busca($id){
        return view('produtos.busca', ['id' => $id]);
    }
}
