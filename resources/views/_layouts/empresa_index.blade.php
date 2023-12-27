<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/empresa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JHM | EMPRESA</title>
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
                <a href="/"><img src="img/jhm-logo-branco.png" alt="Logo JHM"></a>
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-item" id="ativo"><a href="empresa" class="nav-link">EMPRESA</a></li>
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
                <a href="minhaconta.html"><img src="img/perfil.png" alt="Perfil"></a>
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
            <h1>EMPRESA</h1>
            <hr>
            <p>Qualidade e Excelência em Serviços</p>
        </div>
        <div class="secao-linha-azul">
            <hr>
        </div>
    </section>

@yield('main')

     <x-footer>

    </x-footer>
    <script src="js/script.js"></script>
</body>
</html>