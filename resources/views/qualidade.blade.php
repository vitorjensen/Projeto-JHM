<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/qualidade.css">
    <title>JHM | QUALIDADES</title>
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
                    <li class="nav-item" id="ativo"><a href="qualidades" class="nav-link">QUALIDADES</a></li>
                    <li class="nav-item"><a href="produtos" class="nav-link">PRODUTOS</a></li>
                    <li class="nav-item"><a href="{{route('route.contato')}}" class="nav-link">CONTATO</a></li>
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
            <h1>QUALIDADES</h1>
            <hr>
            <p>Veja a qualidade de serviço da JHM</p>
        </div>
        <div class="secao-linha-azul">
            <hr>
        </div>
    </section>
    <main>
        <section class="equipamentos-manutencao">
            <div class="equipamentos">
                <div class="meu-hr">
                    <h2>Equipamentos Atendidos</h2> <hr>
                </div>
                <p>A JHM Equipamentos Industriais realiza o reparo em uma ampla linha de equipamentos, dentre os quais podemos destacar:</p>
                <ul>
                    <li>Alternadores</li>
                    <li>Bobinas Especiais</li>
                    <li>Bombas submersas</li>
                    <li>Redutores de velocidade</li>
                    <li>Geradores</li>
                    <li>Máquinas de Solda</li>
                    <li>Motores Bruschless</li>
                    <li>Motores de Anéis</li>
                    <li>Motores de Corrente Alternada</li>
                    <li>Motores de Corrente Contínua</li>
                    <li>Servo Motor de imã permanenteTacômetros</li>
                    <li>Transformadores</li>
                    <li>Variadores Eletromagnéticos</li>
                </ul>
            </div>
            <div class="manutencao">
                <div class="meu-hr">
                    <h2>Manutenção Preventiva</h2> <hr>
                </div>
                <p>A JHM Equipamentos Industriais é estruturada com equipamentos de última geração, pessoal rigorosamente qualificado atuando com domínio as técnicas de diagnósticos precisos, com prazos de entrega condizentes as expectativas de seus clientes.</p>
                <ul>
                    <li>Alinhamento de Motores com Equipamentos a Laser;</li>
                    <li>Análise de Vibração;</li>
                    <li>Balanceamento Dinâmico;</li>
                    <li>Termografia.</li>
                </ul>

                <img src="img/3motores.jpg" alt="3 Motores" class="img-3motor">
            </div>
        </section>
        <section class="section-politica-visao">
            <div class="politica-visao">
                <div class="img-rebobinador">
                    <img src="img/rebobinador.jpg" alt="Rebobinador">
                </div>
                <div class="txt-politica-visao">
                    <div class="meu-hr">
                        <h2>Política de Qualidade</h2> <hr>
                    </div>
                    <p>
                        “A JHM Motores Elétricos acredita que a melhoria constante dos processos assegura o atendimento aos objetivos e a satisfação dos clientes bem como a qualificação e a motivação dos colaboradores faz com que o trabalho seja realizado com a agilidade e qualidade, atendendo aos requisitos aplicáveis.”
                        <br>
                        <br>
                        <br>
                        - Luiz Umberto Defavori <br>
                        - José Luiz Bution
                    </p>
                    <div class="meu-hr" id="visao">
                        <h2>Visão e Valores</h2> <hr>
                    </div>
                    <p>
                        A Visão da JHM é ser uma empresa líder no fornecimento de serviços especializados e soluções em manutenção de motores elétricos.
                        Transparência nos negócios, parcerias de longo prazo, custo x benefícios x segurança dos serviços prestados aos nossos clientes.
                    </p>
                </div>
            </div>
        </section>
        <section class="section-certificacao">
            <div class="certificacao-titulo">
                <h2>Certificações</h2>
            </div>
            <div class="certificacao-grid">
                <div class="certificacao-pdf-g">
                    <a href="docs/JHM_Certificado-EX_DNV-13OS0072_VAL.-2025-06-04-1.pdf" target="_blank">
                        <img src="docs/certificado1g.png" alt="Certificado1">
                    </a>
                </div>
                <div class="certificacao-pdf-g">
                    <a href="docs/JHM_Certificado-ISO9001-2015_DNV-117504-2012-AQ-BRA-INMETRO_VAL.-2024-06-13.pdf" target="_blank">
                        <img src="docs/certificado2g.png" alt="Certificado2">
                    </a>
                </div>
                <div class="certificacao-pdf-p">
                    <a href="docs/JHM_Credencial-Assistente-Tecnico-Autorizado-5-Estrelas-Certificado_WEG-012_VAL.-2024-06-13-1.pdf" target="_blank">
                        <img src="docs/certificado3p.png" alt="Certificado3">
                    </a>
                </div>
                <div class="certificacao-pdf-p">
                    <a href="docs/JHM_Credencial-Assistente-Tecnico-Autorizado-Atmosferas-Explosivas_WEG-022_VAL.-2022-06-04-1.pdf" target="_blank">
                        <img src="docs/certificado4p.png" alt="Certificado4">
                    </a>
                </div>
            </div>
        </section>
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