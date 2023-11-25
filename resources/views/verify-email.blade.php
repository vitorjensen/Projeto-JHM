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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
                    <li class="nav-item"><a href="empresa" class="nav-link">EMPRESA</a></li>
                    <li class="nav-item"><a href="qualidades" class="nav-link">QUALIDADES</a></li>
                    <li class="nav-item"><a href="produtos" class="nav-link">PRODUTOS</a></li>
                    <li class="nav-item"><a href="contato" class="nav-link">CONTATO</a></li>
                </ul>
            </div>

            <input type="checkbox" name="" id="menu-hamburguer" onclick="menuAparecer()">

            <label for="menu-hamburguer">
                <div id="menu-icon">
                    <span class="hamburguer"></span>
                </div>
            </label>

            <div class="nav-profile">
                <a href="minhaconta"><img src="{{asset('img/perfil.png')}}" alt="Perfil"></a>
            </div>
        </nav>

        <div class="menu-mobile">
            <div class="nav-profile">
                <a href="minhaconta"><img src="{{asset('img/perfil.png')}}" alt="Perfil"></a>
            </div>
            
            <ul>
                <li class="nav-item"><a href="empresa" class="nav-link">EMPRESA</a></li>
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
                <h1>{{_('Verifique sua conta de Email para prosseguir!') }}</h1>
            </div>

            <script>

            @if (Session::has('status') == 'verification-link-sent')
            toastr.success("{{ session('status')}}")
            @endif
            
            </script>
            <div class="main-all-form">
                <!-- <h2>Um link de Verificação foi enviado em seu endereço de Email!</h2> -->
                <form action="{{ route('verification.send') }}" method="post" autocomplete="on">
                    @csrf
               
</div>
            <div class="main-all-button" class="container">
                <a href=""><input type="button" value="Reenviar link"></a>
            </div>
            <br>
        </div>
        </form>

<!-- <script>
        @if(Session::has('status'))

        toastr.success("{{ session('status')}}")

        @elseif(Session::has('email'))
        toastr.error("{{ session('email')}}")
        @endif
 
</script> -->
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