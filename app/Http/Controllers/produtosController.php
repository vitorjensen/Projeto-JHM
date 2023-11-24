<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function index()
    {
        return view('produtos.produtos');
    }
}
