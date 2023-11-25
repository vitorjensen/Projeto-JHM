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
                    <li class="nav-item"><a href="empresa" class="nav-link">EMPRESA</a></li>
                    <li class="nav-item"><a href="qualidades" class="nav-link">QUALIDADES</a></li>
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
    <main>
        <section class="container">
            <div class="txt-img">
                <div class="txt1">
                    <h2>Prezando pela qualidade e excelência em todos os serviços realizados.</h2>
                    <p>Fundada em novembro 1996, a JHM Motores Elétricos, conta com instalações próprias, com sede no município de Santa Bárbara d´Oeste – Estado de São Paulo.</p>
                    <p>A JHM Motores Elétricos preza pela qualidade e excelência em todos os serviços realizados, e mantém uma equipe técnica qualificada e com experiência composta por engenheiros mecânicos, técnicos mecânicos, técnicos eletrônicos, eletricistas de manutenção, torneiros, todos diplomados pelo SENAI (Serviço Nacional de Aprendizagem Industrial), cursos de qualificação profissional e universidades.</p>
                    <p>Especializada em Manutenção de motores elétricos de uso industrial, em 1999 foi homologada pela WEG como Assistente Técnico Autorizado “5 Estrelas”. No ano seguinte, conquistou a bandeira Cestari, comoRepresentante Autorizado para vendas e assistência técnica.</p>
                </div>

                <div class="img">
                    <img src="img/foto-com-miniaturas.jpg" alt="Foto motor com miniatura">
                </div>
            </div>
            <div class="txt2">
                <p>Atendendo a grandes pólos industriais como São Paulo, Campinas, Limeira, Piracicaba, Ribeirão Preto, fixando um público-alvo representado, em sua maioria, por Multinacionais, a JHM possui uma estrutura informal, porém estruturada e flexível, onde cada responsável pela área tem um determinado nível de autonomia para tomar as decisões que julgar necessárias para manter a produção e cumprimento de prazos junto aos clientes.</p>
                <p>A administração é centralizada, ficando a cargo dos sócios as decisões quanto ao gerenciamento da empresa. Contudo, o organograma bem estruturado da empresa, permite uma divisão de tarefas de maneira racional.</p>
                <p>O processo produtivo é flexível e sempre respeitando os procedimentos internos ou normas para cada etapa do trabalho realizado, afim de mantermos a excelência dos produtos e serviços.</p>
                <p>Os cargos são ocupados por especialistas, com atribuições de suas áreas de competências e responsabilidades perfeitamente definidas (usinagem, montagem, rebobinamento) e com tomadas de decisões relativamente descentralizadas e delegadas a níveis inferiores. Para cada setor, o trabalho é feito por unidade, onde os colaboradores utilizam de uma variedade de instrumentos e ferramentas para desempenho de suas atividades com a qualidade exigida.</p>
                <p>Para qualificar os serviços oferecidos, a equipe técnica da JHM Motores Elétricos utiliza equipamentos e aparelhos sofisticados para testes e diagnósticos. Por isso, acompanhar a evolução tecnológica é, com certeza, uma estratégia inerente à empresa, assegurando a sobrevivência e eficácia da JHM.</p>
            </div>
        </section>

        <div class="googlemaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14716.555500289469!2d-47.3778458!3d-22.7602269!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c89c047dd71085%3A0x413c290a58824b9f!2sJHM%20Motores%20El%C3%A9tricos!5e0!3m2!1spt-BR!2sbr!4v1700877346878!5m2!1spt-BR!2sbr" width="80%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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