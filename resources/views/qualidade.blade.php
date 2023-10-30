<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/qualidade.css">
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
                    <li class="nav-item" id="ativo"><a href="#" class="nav-link">QUALIDADES</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PRODUTOS</a></li>
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