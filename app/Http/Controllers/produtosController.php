<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtosController extends Controller
{
    public function index()
    {
        return view('produtos.produtos');
    }

    public function explosao()
    {
    return view('produtos.motor_1');
    }
    public function motorfreio()
    {
    return view('produtos.motor_2');
    }
    public function motorfreioredutor()
    {
    return view('produtos.motor_3');
    }
    public function motorfreioplus()
    {
    return view('produtos.motor_4');
    }
    public function wpremium()
    {
    return view('produtos.motor_5');
    }
    public function wplus()
    {
    return view('produtos.motor_6');
    }
    public function w21()
    {
    return view('produtos.motor_7');
    }
    public function w21plus()
    {
    return view('produtos.motor_8');
    }
    public function motortrifasico()
    {
    return view('produtos.motor_9');
    }
}
