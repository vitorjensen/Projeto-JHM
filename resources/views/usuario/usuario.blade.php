@extends('_layouts.auth_index')
@section('main')
    <main>
        <div class="main-all">
        @if(auth()->check())
            <h1>Seja bem vindo {{auth()->user()->name}}!</h1>
            @endif
          
        <div class="main-all-titulo">
        <i class="fa fa-check-circle" style="font-size:48px;color:lightgreen;"></i> 
            </div>
            <a href="logout">Sair da conta</a>
        </div>
        <br>
        
    </main>
@endsection
  