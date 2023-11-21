<?php

namespace App\Http\Controllers;
use App\Http\Requests\contactUserFormRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class contatoController extends Controller
{
    public function index()
    {

        return view('contato');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:100|min:5',
            'email' => 'required | email',
            'subject' => 'required|string',
            'message' => 'required|string'

        ],[
            'name.required' => 'Campo obrigatório!',
            'email.email' => 'Digite um endereço de Email válido!',
            'email.required' => 'Campo obrigatório!',
            'subject.required' => 'Campo obrigatório!',
            'message.required' => 'Campo obrigatório!',
            'name.min' => 'Este campo deve conter no mínimo :min caractéres!',
            'name.max' => 'Este campo deve conter no máximo :max caractéres!'

        ]);
        $authenticated = Auth::check();

        if(!$authenticated){
            return redirect()->route('route.contato')->with('error', 'Faça Login para entrar em contato conosco!');
        }
        Mail::to('vitorjensen6@gmail.com', 'Vitor Jensen')->send(new Contact([
            
            'fromName'=> $request->input('name'),
            'fromEmail'=> $request->input('email'),
            'subject'=> $request->input('message'),
            'message'=> $request->input('subject'),


        ]));
        return redirect()->route('route.contato')->with('success', 'Email enviado para empresa com sucesso!');

       
    }
}
