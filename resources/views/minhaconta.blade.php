<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/minhaconta.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
    <title>JHM | MINHA CONTA</title>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <img src="img/jhm-logo-branco.png" alt="Logo JHM">
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
                <a href="minhaconta.html"><img src="img/perfil.png" alt="Perfil"></a>
            </div>
        </nav>

        <div class="menu-mobile">
            <div class="nav-profile">
                <a href="minhaconta.html"><img src="img/perfil.png" alt="Perfil"></a>
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
    <footer>
        <section class="footer-grid">
            <div class="footer-grid-onde">
                <h2>Onde Estamos</h2>
                <p>Rua João Covolan Filho, 352 – Distrito Industrial, Santa Bárbara D´Oeste/SP - CEP: 13456-134</p>
                <p>(19) 3026-5555</p>
                <p><a href="mailto:vendas@jhmmotores.com.br">vendas@jhmmotores.com.br</a></p>
            </div>
            <div class="footer-grid-img">
                <img src="img/jhm-logo-96.png" alt="Logo JHM Motores">
            </div>
        </section>
        <div class="direitos">
            <p class="direitos-p">Todos os Direitos Reservados  JHM Motores - Desenvolvido por alunos da <a href="">FUMEP, EEP</a></p>
        </div>
    </footer>
    <script src="js/script.js"></script>

  
</body>
</html>