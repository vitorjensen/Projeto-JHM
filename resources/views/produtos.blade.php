<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>JHM | PRODUTOS</title>
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
                    <li class="nav-item" id="ativo"><a href="produtos" class="nav-link">PRODUTOS</a></li>
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
                <li class="nav-item"><a href="qualidades" class="nav-link">QUALIDADES</a></li>
                <li class="nav-item"><a href="#" class="nav-link">PRODUTOS</a></li>
                <li class="nav-item"><a href="contato" class="nav-link">CONTATO</a></li>
            </ul>
        </div>
    </header>
    <section class="secao-head-pagina">
        <div class="secao-linha-branca">
            <h1>PRODUTOS</h1>
            <hr>
            <p>Motores elétricos</p>
        </div>
        <div class="secao-linha-azul">
            <hr>
        </div>
    </section>
    <main>
        <section class="descricao">
            <p>A JHM Equipamentos Industriais é estruturada com equipamentos de última geração, pessoal rigorosamente qualificado atuando com domínio as técnicas de diagnósticos precisos, com prazos de entrega condizentes as expectativas de seus clientes.</p>
            <img src="img/jhm-logo-96.png" alt="">
        </section>
        <section class="container">
            <div class="pesquisa">
                <input type="search" name="pesquisa" id="ipesquisa">
                <button type="submit">Pesquisar</button>
                <div class="pesquisa-produtos">
                    <h3>Produtos:</h3>
                    <ul>
                        <li class="produto-item">
                            <img src="" alt="">
                            <p>Motor à prova de explosão</p>
                        </li>
                        <li class="produto-item">
                            <img src="" alt="">
                            <p>Moto Freio à prova de explosão</p>
                        </li>
                        <li class="produto-item">
                            <img src="" alt="">
                            <p>Moto Freio para redutor tipo 1</p>
                        </li>
                        <li class="produto-item">
                            <img src="" alt="">
                            <p>Moto Freio alto rendimento plus</p>
                        </li>
                        <li class="produto-item">
                            <img src="" alt="">
                            <p>W22 Premium</p>
                        </li>
                        <li class="produto-item">
                            <img src="" alt="">
                            <p>W22 Plus</p>
                        </li>
                        <li class="produto-item">
                            <img src="" alt="">
                            <p>W21 Carcaça de Alumínio - Montagem</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-motores">
                <div class="motores">
                    <img src="" alt="">
                    <p>Motor à prova de explosão</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="" alt="">
                    <p>Motofreio à prova de explosão</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="" alt="">
                    <p>Moto Freio para redutor tipo 1</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="" alt="">
                    <p>Moto Freio alto rendimento plus</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="" alt="">
                    <p>W22 Premium</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="" alt="">
                    <p>W22 Plus</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
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
    <script src="js/script.js"></script>
</body>
</html>