@extends('_layouts.auth_index')
@section('main_resetpassword')
    <main>
        <div class="main-all">
            <div class="main-all-titulo">
                <h1>Redefina sua senha!</h1>
            </div>

            <div class="main-all-form">
                <!-- <h2>Digite um email válido!</h2> -->
                <form action="{{route('password.update')}}" method="post" autocomplete="on">
                    @csrf
                    @error('token')
                        <div class="invalid-feedback" style="color: red;">

                        {{$message}}
                        </div>
                        <br>
                        @enderror
                    <input type="hidden" name="token" value="{{ $token }}"/>
                    @error('email')
                        <div class="invalid-feedback" style="color: red;">

                        {{$message}}
                        </div>
                        <br>
                        @enderror
                    <p class="form-group">
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-input" required>
                        <label for="iemail" class="form-label">Email:</label>
                    </p>
                    @error('password')
                        <div class="invalid-feedback" style="color: red;">

                        {{$message}}
                        </div>
                        <br>
                        @enderror
                  
                    <p class="form-group">
                        <input type="password" name="password" id="password" class="form-input" required>
                        <label for="isenha" class="form-label">Nova senha:</label>
                    </p>
                    @error('password')
                        <div class="invalid-feedback" style="color: red;">

                        {{$message}}
                        </div>
                        <br>
                        @enderror
                    <p class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-input" required>
                        <label for="isenha" class="form-label">Confirme sua nova senha:</label>
                    </p>
            </div>
            <div class="main-all-button" class="container">
                <a href="{{route('route.iniciarsessao')}}"><input type="button" value="Voltar"></a>
                <input type="submit" value="Redefinir">
            </div>
        </div>
        </form>
    </main>
   @endsection