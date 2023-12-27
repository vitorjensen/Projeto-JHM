<?php

use App\Http\Controllers\autenticacaoController;
use App\Http\Controllers\contatoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\produtosController;
use App\Http\Controllers\qualidadeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
]);

//Rotas externas
Route::get('/', [HomepageController::class, 'index'])->name('route.homepage');
route::get('qualidades',[qualidadeController::class, 'index'])->name('route.qualidade');
route::get('contato', [contatoController::class, 'index'])->name('route.contato');
route::post('contato', [contatoController::class, 'store'])->name('route.contact.store');
route::get('produtos',[produtosController::class, 'index'])->name('route.produtos');
route::get('motor-a-prova-de-explosao',[produtosController::class, 'explosao'])->name('route.motor_1');
route::get('motor-freio-a-prova-de-explosao',[produtosController::class, 'motorfreio'])->name('route.motor_2');
route::get('motor-freio-redutor-tipo-1',[produtosController::class, 'motorfreioredutor'])->name('route.motor_3');
route::get('motor-freio-alto-redimento-plus',[produtosController::class, 'motorfreioplus'])->name('route.motor_4');
route::get('w22-premium',[produtosController::class, 'wpremium'])->name('route.motor_5');
route::get('w22-plus',[produtosController::class, 'wplus'])->name('route.motor_6');
route::get('w21-carcaca-de-aluminio-montagem',[produtosController::class, 'w21'])->name('route.motor_7');
route::get('w21-alto-rendimento-plus',[produtosController::class, 'w21plus'])->name('route.motor_8');
route::get('w21-motor-trifasico-ip55',[produtosController::class, 'motortrifasico'])->name('route.motor_9');
route::get('empresa',[EmpresaController::class, 'index'])->name('route.empresa');
route::get('usuario',[autenticacaoController::class, 'usuario'])->name('route.usuario')->middleware('auth');
//Fim das Rotas externas




//Rotas de Autenticação
// Auth::routes(['verify' => true]);

route::get('minhaconta',[autenticacaoController::class, 'index'])->name('route.minhaconta');
route::post('minhaconta',[autenticacaoController::class, 'store'])->name('route.store');
route::get('iniciarsessao',[autenticacaoController::class, 'login'])->name('route.iniciarsessao');
route::post('auth',[autenticacaoController::class, 'auth'])->name('route.login');
route::get('logout', [autenticacaoController::class, 'destroy'])->name('route.destroy');




//Reset de Password
Route::get('/forgot-password', function () {
return view('esquecisenha');
})->middleware('guest')->name('password.request');

        Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email'],[
        'required' => 'Campo obrigatório!',
        'email.email' => 'Digite um endereço de Email válido!'
        ]);

        $status = Password::sendResetLink(
        $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)],[
        'status'=> 'Link de Redefinição de Senha enviado. Verifique seu Email!'
        ])
        : back()->withErrors(['email' => __($status)],[
        'email'=>'Erro ao tentar redefinir a senha!'
        ]);
})->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}', function (string $token) {
    return view('reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
        $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|max:8|min:5|confirmed',
    ],[
        'token.required' => 'Token de Redefinição de Senha inválido!',
        'email.required' => 'Campo obrigatório!',
        'email.email' => 'Digite um Email válido!',
        'password.required' => 'Campo obrigatório!',
        'password.max' => 'Este campo deve conter no máximo :max caractéres!',
        'password.min' => 'Este campo deve conter no mínimo :min caractéres!',
        'password.confirmed' => 'O campo Nova Senha não combina com a Senha de Confirmação!',
        
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
        $user->forceFill([
        'password' => Hash::make($password)
        ])->setRememberToken(Str::random(60));

        $user->save();

        event(new PasswordReset($user));
    }
    );
 
    return $status === Password::PASSWORD_RESET
        ? redirect()->route('route.iniciarsessao')->with(['status'=> __($status)],[
        'status'=> 'Senha alterada com sucesso!'
        ])
        : back()->withErrors(['email' => [__($status)],[
        'email'=> 'Erro ao alterar a senha!'
        ]]);
})->middleware('guest')->name('password.update');
//Fim


//Verificação de Email

Route::get('/email/verify', function () {
    return view('verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/usuario');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Fim


//Fim das rotas de autenticação