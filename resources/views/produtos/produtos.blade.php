@extends('layouts.index')

@section('main')
<main>
        <section class="descricao">
            <p>A JHM Equipamentos Industriais é estruturada com equipamentos de última geração, pessoal rigorosamente qualificado atuando com domínio as técnicas de diagnósticos precisos, com prazos de entrega condizentes as expectativas de seus clientes.</p>
            <img src="img/jhm-logo-96.png" alt="">
        </section>
        <section class="container">
            <div class="pesquisa">
                <form onsubmit="event.preventDefault();" role="search">
                    <label for="search">Pesquise por um motor</label>
                    <input id="search" type="search" placeholder="Pesquisar..." autofocus required />
                    <button type="submit"><p>Pesquisar</p></button>    
                </form>
                <div class="pesquisa-produtos">
                    <h3>Produtos:</h3>
                    <ul>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/motor-a-prova-de-explosao.jpg" alt="Motor à prova de explosão">
                                <p>Motor à prova de explosão</p>
                            </a>
                        </li>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/motor-freio-a-prova-de-explosao.jpg" alt="Moto Freio à prova de explosão">
                                <p>Moto Freio à prova de explosão</p>
                            </a>
                        </li>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/motor-freio-redutor-tipo-1.jpg" alt="Moto Freio para redutor tipo 1">
                                <p>Moto Freio para redutor tipo 1</p>
                            </a>
                        </li>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/motor-freio-alto-rendimento.jpg" alt="Moto Freio alto rendimento plus">
                                <p>Moto Freio alto rendimento plus</p>
                            </a>
                        </li>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/w22-premium.jpg" alt="W22 Premium">
                                <p>W22 Premium</p>
                            </a>
                        </li>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/w22-plus.jpg" alt="W22 Plus">
                                <p>W22 Plus</p>
                            </a>
                        </li>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/w21-carcaca-de-aluminio-montagem.jpg" alt="W21 Carcaça de Alumínio - Montagem">
                                <p>W21 Carcaça de Alumínio - Montagem</p>
                            </a>
                        </li>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/W21-alto-rendimento-plus-1.jpg" alt="W21 Alto Rendimento Plus">
                                <p>W21 Alto Rendimento Plus</p>
                            </a>
                        </li>
                        <li class="produto-item">
                            <a href="">
                                <img src="img/motores/motor-w21-aluminio-multimontagem-weg.jpg" alt="W21 Motor Trifásico IP55">
                                <p>W21 Motor Trifásico IP55</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-motores">
                <div class="motores">
                    <img src="img/motores/motor-a-prova-de-explosao.jpg" alt="Motor à prova de explosão">
                    <p>Motor à prova de explosão</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="img/motores/motor-freio-a-prova-de-explosao.jpg" alt="Motofreio à prova de explosão">
                    <p>Motofreio à prova de explosão</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="img/motores/motor-freio-redutor-tipo-1.jpg" alt="Moto Freio para redutor tipo 1">
                    <p>Moto Freio para redutor tipo 1</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="img/motores/motor-freio-alto-rendimento.jpg" alt="Moto Freio alto rendimento plus">
                    <p>Moto Freio alto rendimento plus</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="img/motores/w22-premium.jpg" alt="W22 Premium">
                    <p>W22 Premium</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
                <div class="motores">
                    <img src="img/motores/w22-plus.jpg" alt="W22 Plus">
                    <p>W22 Plus</p>
                    <a href="#" class="botao-lermais"><p>Leia mais</p></a>
                </div>
            </div>
        </section>
    </main>
@stop