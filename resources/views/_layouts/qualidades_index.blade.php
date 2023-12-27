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
        <x-header>

    </x-header>
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


@yield('main')

        <x-footer>

    </x-footer>
    <script src="js/script.js"></script>
</body>
</html>