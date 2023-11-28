<?php

namespace App\Http\Controllers;
use App\Library\GoogleClient;
use App\Library\Authenticate;
use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class autenticacaoController extends Controller
{
 public function index()
 {
    return view('minhaconta');
 }

 public function login()
 {
   $googleClient = new GoogleClient;
   $googleClient->init();

   if($googleClient->authenticated())
   {
       $auth = new Authenticate();
       return $auth->authGoogle($googleClient->getData());
   }
 
   return view('iniciarsessao',['authUrl' => $googleClient->generateLink()]);
 }

 public function auth(Request $request)
 {
   $request->validate([
      'name' => 'required|string|max:100|min:5',
      'email' => 'required | email',
      'password' => 'required|max:8|min:5'
   ],[

      'name.required' => 'Campo obrigatório!',
      'email.email' => 'Digite um endereço de Email válido!',
      'email.required' => 'Campo obrigatório!',
      'password.required' => 'Campo obrigatório!',
      'password.max' => 'Este campo deve conter no máximo :max caractéres!',
      'password.min' => 'Este campo deve conter no mínimo :min caractéres!',
      'name.min' => 'Este campo deve conter no mínimo :min caractéres!',
      'name.max' => 'Este campo deve conter no máximo :max caractéres!'
   ]);
   $credentials = $request->only('name', 'email', 'password');
   $authenticated = Auth::attempt($credentials, $request->remember);

   if(!$authenticated)
   {
       return redirect()->route('route.iniciarsessao')->with('error', 'Usuário, Email ou Senha incorretos!');
   }
   return redirect()->route('route.usuario')->with('logged', 'Log-in realizado com sucesso!');

 
}

 public function store(StoreUpdateUserFormRequest $request)
 {
   User::create($request->all());
    return redirect()->route('route.store')->with('success', 'Usuário cadastrado com sucesso!');
 }



 public function reset()
 {
    return view('reset-password');
 }

 public function usuario()
 {
    return view('usuario');
 }

 public function destroy()
 {
 Auth::logout();
 return redirect()->route('route.iniciarsessao');
 }
}
