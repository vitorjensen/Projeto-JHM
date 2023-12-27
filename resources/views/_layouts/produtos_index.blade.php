<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/jhm-icon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5ff722f86b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/produtos.css">
    <link rel="stylesheet" href="css/motor.css">
    <title>JHM | PRODUTOS</title>
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
      <!-- INICIO -->
<x-header>

</x-header>
    
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
  <!-- FIM  -->

   @yield('main')
   @yield('main1')
   @yield('main2')
   @yield('main3')
   @yield('main4')
   @yield('main5')
   @yield('main6')
   @yield('main7')
   @yield('main8')
   @yield('main9')

<!-- INICIO FOOTER -->
     <x-footer>

    </x-footer>
    <!-- FIM DO FOOTER -->
    <script src="js/script.js"></script>
</body>
</html>