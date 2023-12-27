@extends('_layouts.auth_index')
@section('main_esquecisenha')
    <main>
        <div class="main-all">
            <div class="main-all-titulo">
                <h1>Redefina sua senha!</h1>
            </div>

            <div class="main-all-form">
                <!-- <h2>Digite um email válido!</h2> -->
                <form action="{{route('password.email')}}" method="post" autocomplete="on">
                    @csrf
                    @error('email')
                        <div class="invalid-feedback" style="color: red;">

                        {{$message}}
                        </div>
                        <br>
                        @enderror
                    <p class="form-group">
                        <input type="text" name="email" id="email" class="form-input" required>
                        <label for="iemail" class="form-label">E-mail:</label>
                    </p>
                  
               
            </div>
            <div class="main-all-button" class="container">
                <a href="{{route('route.iniciarsessao')}}"><input type="button" value="Voltar"></a>
                <input type="submit" value="Redefinir">
            </div>
        </div>
        </form>

<script>
        @if(Session::has('status'))

        toastr.success("{{ session('status')}}")

        @elseif(Session::has('email'))
        toastr.error("{{ session('email')}}")
        @endif
 
</script>
    </main>
@endsection