<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/iniciar-sessao.css">
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
                    <li class="nav-item"><a href="#" class="nav-link">QUALIDADES</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PRODUTOS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">CONTATO</a></li>
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
                <li class="nav-item"><a href="#" class="nav-link">QUALIDADES</a></li>
                <li class="nav-item"><a href="#" class="nav-link">PRODUTOS</a></li>
                <li class="nav-item"><a href="#" class="nav-link">CONTATO</a></li>
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
                <h1>Faça Log-in para realizar operações com mais rapidez!</h1>
            </div>
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
                 <input type="checkbox" name="remember"> Lembre-me
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>