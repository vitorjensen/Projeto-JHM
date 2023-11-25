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
        <aside class="container-wa">
            <a href="https://api.whatsapp.com/send?phone=5519997069245&text=Texto%20aqui"
                target="_blank"
                style="position:fixed;bottom:30px;right:40px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="none" viewBox="0 0 48 48" id="whatsapp"><rect width="48" height="48" fill="#0DC143" rx="24"></rect><path fill="#fff" d="M34.7507 13.2115C32.1777 10.5628 28.621 9.125 24.9885 9.125C17.2696 9.125 11.0642 15.4061 11.1399 23.0493C11.1399 25.4709 11.821 27.8169 12.9561 29.9358L10.9885 37.125L18.3291 35.2331C20.3723 36.3682 22.6426 36.898 24.9128 36.898C32.5561 36.898 38.7615 30.6169 38.7615 22.9736C38.7615 19.2655 37.3237 15.7845 34.7507 13.2115ZM24.9885 34.552C22.9453 34.552 20.902 34.0223 19.1615 32.9628L18.7074 32.7358L14.3183 33.8709L15.4534 29.5574L15.1507 29.1034C11.821 23.7304 13.4101 16.6169 18.8588 13.2872C24.3074 9.95743 31.3453 11.5466 34.675 16.9953C38.0047 22.4439 36.4156 29.4818 30.9669 32.8115C29.2264 33.9466 27.1074 34.552 24.9885 34.552ZM31.648 26.152L30.8156 25.7736C30.8156 25.7736 29.6047 25.2439 28.848 24.8655C28.7723 24.8655 28.6966 24.7899 28.621 24.7899C28.3939 24.7899 28.2426 24.8655 28.0912 24.9412C28.0912 24.9412 28.0156 25.0169 26.9561 26.2277C26.8804 26.3791 26.7291 26.4547 26.5777 26.4547H26.502C26.4264 26.4547 26.275 26.3791 26.1993 26.3034L25.821 26.152C24.9885 25.7736 24.2318 25.3196 23.6264 24.7142C23.475 24.5628 23.248 24.4115 23.0966 24.2601C22.5669 23.7304 22.0372 23.125 21.6588 22.4439L21.5831 22.2926C21.5074 22.2169 21.5074 22.1412 21.4318 21.9899C21.4318 21.8385 21.4318 21.6872 21.5074 21.6115C21.5074 21.6115 21.8101 21.2331 22.0372 21.0061C22.1885 20.8547 22.2642 20.6277 22.4156 20.4764C22.5669 20.2493 22.6426 19.9466 22.5669 19.7196C22.4912 19.3412 21.5831 17.298 21.3561 16.8439C21.2047 16.6169 21.0534 16.5412 20.8264 16.4655H20.5993C20.448 16.4655 20.221 16.4655 19.9939 16.4655C19.8426 16.4655 19.6912 16.5412 19.5399 16.5412L19.4642 16.6169C19.3128 16.6926 19.1615 16.8439 19.0101 16.9196C18.8588 17.0709 18.7831 17.2223 18.6318 17.3736C18.102 18.0547 17.7993 18.8872 17.7993 19.7196C17.7993 20.325 17.9507 20.9304 18.1777 21.4601L18.2534 21.6872C18.9345 23.125 19.8426 24.4115 21.0534 25.5466L21.3561 25.8493C21.5831 26.0764 21.8101 26.2277 21.9615 26.4547C23.5507 27.8169 25.3669 28.8007 27.4101 29.3304C27.6372 29.4061 27.9399 29.4061 28.1669 29.4818C28.3939 29.4818 28.6966 29.4818 28.9237 29.4818C29.302 29.4818 29.7561 29.3304 30.0588 29.1791C30.2858 29.0277 30.4372 29.0277 30.5885 28.8764L30.7399 28.725C30.8912 28.5736 31.0426 28.498 31.1939 28.3466C31.3453 28.1953 31.4966 28.0439 31.5723 27.8926C31.7237 27.5899 31.7993 27.2115 31.875 26.8331C31.875 26.6818 31.875 26.4547 31.875 26.3034C31.875 26.3034 31.7993 26.2277 31.648 26.152Z"></path></svg>
            </a>
        </aside>
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