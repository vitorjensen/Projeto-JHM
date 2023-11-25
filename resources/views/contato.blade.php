<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/contato.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JHM | CONTATO</title>
</head>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 20px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <img src="img/jhm-logo-branco.png" alt="Logo JHM">
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="empresa" class="nav-link">EMPRESA</a></li>
                    <li class="nav-item"><a href="{{route('route.qualidade')}}" class="nav-link">QUALIDADES</a></li>
                    <li class="nav-item"><a href="produtos" class="nav-link">PRODUTOS</a></li>
                    <li class="nav-item" id="ativo"><a href="contato" class="nav-link">CONTATO</a></li>
                </ul>
            </div>

            <input type="checkbox" name="" id="menu-hamburguer" onclick="menuAparecer()">

            <label for="menu-hamburguer">
                <div id="menu-icon">
                    <span class="hamburguer"></span>
                </div>
            </label>

            <div class="nav-profile">
            <div class="dropdown">
            <a href="minhaconta"><img src="img/perfil.png" alt="Perfil"></a>
             @if(auth()->check())
            <div class="dropdown-content">
            <h5 class="dropdown-item dropdown-footer">
          <a href="#" class="dropdown-item dropdown-footer">
          <i class="fa fa-gear" style="font-size:18px"></i> {{ __('Perfil') }}</a>
          </a>
          </h5>
        
          <br>
          <h5 class="dropdown-item dropdown-footer">
          <a href="{{route('route.destroy')}}" class="dropdown-item dropdown-footer">
          <i class="fa fa-sign-out" style="font-size:18px"></i> {{ __('Sair') }}</a>
          </a>
          </h5>
         </div>
                @endif
            </div>
        </nav>

        <div class="menu-mobile">
            <div class="nav-profile">
                <a href="minhaconta"><img src="img/perfil.png" alt="Perfil"></a>
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
            <h1>CONTATO</h1>
            <hr>
            <p>Fale com a JHM Motores!</p>
        </div>
        <div class="secao-linha-azul">
            <hr>
        </div>
    </section>
    <main>
        <div id="imagem-div">
            <img src="img/desenhocontato.png" alt="Desenho Contato">
        </div>
        <div class="container">
            <div id="container-titulo">
                <h2>Preencha o formulário abaixo e entre em contato conosco.</h2>
            </div>
            <div id="container-inputs">
                <form action="{{route('route.contact.store')}}" method="post">
                @csrf
                    <p class="form-group">
                        <label for="iname" class="form-label">Seu nome:</label>
                        <input type="text" name="name" id="name" value="" class="form-input">
                    </p>
                    @error('name')
                        <div class="invalid-feedback" style="color: red;">
                        {{$message}}
                        </div>
                        <br>
                        @enderror
                    <p class="form-group">
                        <label for="iemail" class="form-label">E-mail:</label>
                        <input type="email" name="email" id="email" value="" class="form-input" >
                    </p>
                    @error('email')
                        <div class="invalid-feedback" style="color: red;">
                        {{$message}}
                        </div>
                        <br>
                        @enderror
                    <p class="form-group">
                        <label for="iassunto" class="form-label">Assunto:</label>
                        <input type="text" name="subject" id="subject" class="form-input" >
                    </p>
                     @error('subject')
                        <div class="invalid-feedback" style="color: red;">
                        {{$message}}
                        </div>
                        <br>
                        @enderror
                    <p class="form-group">
                        <label for="imsg" class="form-label">Sua mensagem:</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-input"></textarea>
                    </p>
                     @error('message')
                        <div class="invalid-feedback" style="color: red;">
                        {{$message}}
                        </div>
                        <br>
                        @enderror
            </div>
            <script>
            @if(Session::has('success'))

            toastr.success("{{ session('success')}}")
            @endif

            </script>
            <script>
            @if(Session::has('error'))

            toastr.error("{{ session('error')}}")
            @endif

            </script>
            <div id="container-buttom">
                <a href="#"><input type="submit" value="Enviar"></a>
            </div>
            </form>
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