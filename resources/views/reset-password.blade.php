<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/iniciar-sessao.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <title>JHM | MINHA CONTA</title>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <img src="{{asset('img/jhm-logo-branco.png')}}" alt="Logo JHM">
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">EMPRESA</a></li>
                    <li class="nav-item"><a href="{{route('route.qualidade')}}" class="nav-link">QUALIDADES</a></li>
                    <li class="nav-item"><a href="produtos" class="nav-link">PRODUTOS</a></li>
                    <li class="nav-item"><a href="{{route('route.contato')}}" class="nav-link">CONTATO</a></li>
                </ul>
            </div>

            <input type="checkbox" name="" id="menu-hamburguer" onclick="menuAparecer()">

            <label for="menu-hamburguer">
                <div id="menu-icon">
                    <span class="hamburguer"></span>
                </div>
            </label>

            <div class="nav-profile">
                <a href="minhaconta.html"><img src="{{asset('img/perfil.png')}}" alt="Perfil"></a>
            </div>
        </nav>

        <div class="menu-mobile">
            <div class="nav-profile">
                <a href="minhaconta.html"><img src="{{asset('img/perfil.png')}}" alt="Perfil"></a>
            </div>
            
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">EMPRESA</a></li>
                <li class="nav-item"><a href="qualidades" class="nav-link">QUALIDADES</a></li>
                <li class="nav-item"><a href="produtos" class="nav-link">PRODUTOS</a></li>
                <li class="nav-item"><a href="contato" class="nav-link">CONTATO</a></li>
            </ul>
        </div>
    </header>
    <section class="secao-head-pagina">
        <div class="secao-linha-branca">
            <h1>MINHA CONTA</h1>
            <hr>
            <p>Crie ou entre em sua conta JHM!</p>
        </div>
        <div class="secao-linha-azul">
            <hr>
        </div>
    </section>
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
    <footer>
        <section class="footer-grid">
            <div class="footer-grid-onde">
                <h2>Onde Estamos</h2>
                <p>Rua João Covolan Filho, 352 – Distrito Industrial, Santa Bárbara D´Oeste/SP - CEP: 13456-134</p>
                <p>(19) 3026-5555</p>
                <p><a href="mailto:vendas@jhmmotores.com.br">vendas@jhmmotores.com.br</a></p>
            </div>
            <div class="footer-grid-img">
                <img src="{{asset('img/jhm-logo-96.png')}}" alt="Logo JHM Motores">
            </div>
        </section>
        <div class="direitos">
            <p class="direitos-p">Todos os Direitos Reservados  JHM Motores - Desenvolvido por alunos da <a href="">FUMEP, EEP</a></p>
        </div>
    </footer>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>