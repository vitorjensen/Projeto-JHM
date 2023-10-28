<?php

namespace App\Http\Controllers;
use App\Http\Requests\contactUserFormRequest;
use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function index()
    {

        return view('contato');
    }

    public function store()
    {

       
    }
}
