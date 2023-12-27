<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class qualidadeController extends Controller
{
   public function index()
   {

    return view('qualidades.qualidade');
   }
}
