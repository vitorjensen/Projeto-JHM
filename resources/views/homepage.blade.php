<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/script.js" defer></script>
    <title>JHM | HOME</title>
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
                <a href="homepage.html"><img src="img/jhm-logo-branco.png" alt="Logo JHM"></a>
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">EMPRESA</a></li>
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
            <a href="minhaconta.html"><img src="img/perfil.png" alt="Perfil"></a>
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
                <li class="nav-item"><a href="#" class="nav-link">EMPRESA</a></li>
                <li class="nav-item"><a href="qualidades" class="nav-link">QUALIDADES</a></li>
                <li class="nav-item"><a href="produtos" class="nav-link">PRODUTOS</a></li>
                <li class="nav-item"><a href="contato" class="nav-link">CONTATO</a></li>
            </ul>
        </div>
    </header>


    <main>
        <section class="container-principal">
            <button id="prev-button"><img src="img/prev.png" alt="prev-button"></button>
            <button id="next-button"><img src="img/next.png" alt="next-button"></button>
            <div class="container-carrossel">
                <div class="carrossel-images">
                    <img src="img/homepage-grd/1.png" alt="motor 1" class="slider on">
                    <img src="img/homepage-grd/2.png" alt="motor 2" class="slider">
                    <img src="img/homepage-grd/3.png" alt="motor 3" class="slider">
                </div>
            </div>

            <div class="scroll-down">

            </div>
        </section>


        <section class="container-divs">
            <div class="div-pqn"> </div>
            <div class="div-gnd"> </div>
            <div class="div-pqn"> </div>
        </section>



        <div class="center">
            <div class="item">
                <div class="desc-motor">
                    <h2>MOTOR À PROVA DE EXPLOSÃO</h2>
                    <p>Proteção IP55</p>
                </div>
                <img class="img-carrossel-centro" src="img/motores/motor-a-prova-de-explosao.jpg" alt="motor 1">
            </div>
            <div class="item">
                <div class="desc-motor">
                    <h2>MOTOR À PROVA DE EXPLOSÃO</h2>
                    <p>Proteção IP66W</p>
                </div>
                <img class="img-carrossel-centro" src="img/motores/motor-freio-a-prova-de-explosao.jpg" alt="motor 1">
            </div>
            <div class="item">
                <div class="desc-motor">
                    <h2>MOTO FREIO</h2>
                    <p>Redutor tipo 1</p>
                </div>
                <img class="img-carrossel-centro" src="img/motores/motor-freio-redutor-tipo-1.jpg" alt="motor 1">
            </div>
            <div class="item">
                <div class="desc-motor">
                    <h2>W22 Premium</h2>
                    <p>Potência: 0,16 a 750cv</p>
                </div>
                <img class="img-carrossel-centro" src="img/motores/w22-premium.jpg" alt="motor 1">
            </div>
        </div>

        <section id="container-atendimento-online">
            <div class="div-atendimento">
                <p>Rua João Covolan Filho, 352 - Distrito Industrial</p>
                <p>Santa Bárbara d'Oeste/SP</p>
            </div>
            <div class="div-atendimento">
                <p>Telefone: (19)3026-5555</p>
                <p>E-mail: jhm@motores.com.br</p>
            </div>
            <a href="#" id="botao-atendimento"><p>ATENDIMENTO ONLINE</p></a>
        </section>

        <section id="container-sobre">
            <div id="sobre-img">
                <div id="sobre">
                    <h2>JHM Motores</h2>
                    <p>Atendendo a grandes pólos industriais como São Paulo, Campinas, Limeira, Piracicaba, Ribeirão Preto, fixando um público-alvo representado, em sua maioria, por Multinacionais, a JHM possui uma estrutura informal, porém estruturada e flexível, onde cada responsável pela área tem um determinado nível de autonomia para tomar as decisões que julgar necessárias para manter a produção e cumprimento de prazos junto aos clientes.</p>
                </div>
                <img src="img/selo1996.png" alt="desde 1996">
            </div>
            <div id="revenda">
                <h2>Revenda de Motores</h2>
                <p>A JHM preza pela excelência no atendimento e qualidade na comercialização de produtos e serviços e disponibiliza aos seus clientes toda a linha de MOTORES INDUSTRIAIS WEG, proporcionado soluções de maneira rápida, confiável e eficaz.</p>
            </div>
        </section>

        <section class="tudo-div">
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
        </section>

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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.center').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                speed: 500,
                autoplaySpeed: 5000,
                infinite: true,
                autoplay: true,
                centerMode: true,
                centerPadding: "70px",
                dots: true,
            });
        });
    </script>
</body>
</html>