@extends('_layouts.auth_index')
@section('main_minhaconta')
    <main>
        <div class="main-all">
            <div class="main-all-titulo">
                <h1>Crie sua conta JHM e faça Log-in!</h1>
            </div>

            <div class="main-all-form">
                <!-- <h2>Crie uma conta JHM</h2> -->
                <form action="{{route('route.minhaconta')}}" method="post">
                    @csrf
                    @error('name')
                        <div class="invalid-feedback" style="color: red;">
                        {{$message}}
                        </div>
                        <br>
                        @enderror
                       
                    <p class="form-group">
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-input @error('name') is-invalid @enderror"  required>
                   
                        <label for="inome" class="form-label">Nome completo:</label>
                    
                    </p>
                    @error('email')
                        <div class="invalid-feedback" style="color: red;">

                        {{$message}}
                        </div>
                        <br>
                        @enderror

                    <p class="form-group">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-input  @error('email') is-invalid @enderror" required>
                        <label for="iemail" class="form-label">E-mail:</label>
                    </p>
                    @error('password')
                        <div class="invalid-feedback" style="color: red;">

                        {{$message}}
                        </div>
                        <br>
                        @enderror

                    <p class="form-group">
                        <input type="password" name="password" id="password" class="form-input  @error('password') is-invalid @enderror" required>
                        <label for="isenha" class="form-label">Senha:</label>
                    </p>
                    @error('password_confirmation')
                        <div class="invalid-feedback" style="color: red;">

                        {{$message}}
                        </div>
                        <br>
                        @enderror
                    <p class="form-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-input" required>
                        <label for="isenha" class="form-label">Confirme sua senha:</label>
                    </p>
               
            </div>
            <div class="main-all-button" class="container">
                <a href="{{route('route.iniciarsessao')}}"><input type="button" value="Faça login"></a>
                <input type="submit" value="Criar">
            </div>
</form>
<script>
        @if(Session::has('success'))

        toastr.success("{{ session('success')}}")
        @endif

</script>
        </div>
    </main>
@endsection