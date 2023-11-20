<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/homepage.css">
    <script src="js/script.js" defer></script>
    <title>JHM | QUALIDADES</title>
</head>
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
                    <li class="nav-item"><a href="#" class="nav-link">PRODUTOS</a></li>
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
                <li class="nav-item"><a href="contato.html" class="nav-link">CONTATO</a></li>
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
                // autoplay: true,
                centerMode: true,
                centerPadding: "70px",
                dots: true,
            });
        });
    </script>
</body>
</html>