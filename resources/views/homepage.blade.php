<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/homepage.css">
    <title>JHM | QUALIDADES</title>
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
                    <li class="nav-item" id="ativo"><a href="qualidade.html" class="nav-link">QUALIDADES</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PRODUTOS</a></li>
                    <li class="nav-item"><a href="contato.html" class="nav-link">CONTATO</a></li>
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
                <li class="nav-item"><a href="qualidade.html" class="nav-link">QUALIDADES</a></li>
                <li class="nav-item"><a href="#" class="nav-link">PRODUTOS</a></li>
                <li class="nav-item"><a href="#" class="nav-link">CONTATO</a></li>
            </ul>
        </div>
    </header>


    <main>
        <div class="carrossel">
            <div><img src="img/1.png" alt="motor 1"></div>
            <!-- <div><img src="img/2.png" alt="motor 2"></div>
            <div><img src="img/3.png" alt="motor 3"></div> -->
        </div>

        <div class="center">
            <div class="item"><img class="img-carrossel-centro" src="img/motores/motor-a-prova-de-explosao.jpg" alt="motor 1"></div>
            <div class="item"><img class="img-carrossel-centro" src="img/motores/motor-freio-a-prova-de-explosao.jpg" alt="motor 1"></div>
            <div class="item"><img class="img-carrossel-centro" src="img/motores/motor-freio-redutor-tipo-1.jpg" alt="motor 1"></div>
            <div class="item"><img class="img-carrossel-centro" src="img/motores/w22-premium.jpg" alt="motor 1"></div>

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
                // autoplay: true,
                centerMode: true,
                centerPadding: "70px",
                dots: true,
            });
        });
    </script>
</body>
</html>