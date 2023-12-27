@extends('_layouts.auth_index')
@section('main_iniciarsessao')
    <main>
        <div class="main-all">
            <div class="main-all-titulo">
                <h1>Faça Log-in para realizar operações com mais rapidez!</h1>
            </div>
            <div class="google" name="buttonGoogle">
            <button id="btnSocialLogin_Google_96d37da4-9aab-4435-b9b6-4ceaf526cd9b" class="phone-otp-button phone-otp-socialsignin-button">
<a href="{{ $authUrl }}"  type="button"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262" id="google">
   <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
   <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1">
   </path><path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782">
   </path><path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
</svg> Login no Google</a>  
</button> 
            </div>
           
            <br>
            @error('error')
            <div class="invalid-feedback" style="color: red;">

            {{$message}}
            </div>
            <br>
                   @enderror 
            <div class="main-all-form">
                <!-- <h2>Inicie sessão na JHM</h2> -->
                <form action="{{route('route.login')}}" method="POST" autocomplete="on">
                    @csrf

                @error('name')
                <div class="invalid-feedback" style="color: red;">

                {{$message}}
                </div>
                <br>
                @enderror
                <p class="form-group">
                    
                        <input type="name" name="name" id="name" value="{{ old('name') }}" class="form-input" required>
                        <label for="inome" class="form-label">Nome completo:</label>
                   
                    </p>  
                @error('email')
                <div class="invalid-feedback" style="color: red;">

                {{$message}}
                </div>
                <br>
                @enderror
                    <p class="form-group">
                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-input" required>
                        <label for="iemail" class="form-label">E-mail:</label>
                    </p>
                @error('password')
                <div class="invalid-feedback" style="color: red;">

                {{$message}}
                </div>
                <br>
                @enderror
                    <p class="form-group">
                        <input type="password" name="password" id="password" class="form-input" required>
                        <label for="isenha" class="form-label">Senha:</label>
                    </p>
                 <input type="checkbox" name="remember" value="old('remember') ? 'checked' : ''}}" > Lembre-me
            </div>
            <br>
            <div class="main-all-button" class="container">
                <a href="{{route('route.minhaconta')}}"><input type="button" value="Não tenho conta JHM"></a>
                <input type="submit" value="Entrar">
            </div>
            </form>
    <script>
        @if(Session::has('error'))

        toastr.error("{{ session('error')}}")
        @endif

</script>
<script>
        @if(Session::has('status'))

        toastr.success("{{ session('status')}}")
        @elseif(Session::has('email'))

        toastr.error("{{ session('email')}}")
        @endif

</script>
            <div id="esqueci-senha">
                <a href="{{route('password.request')}}">Esqueci minha senha</a>
            </div>
        </div>
    </main>
@endsection