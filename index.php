<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./css/index.css">
    <!-- Página Home -->
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./scripts/datatables/datatables.css">
    <!-- Página Cadastro -->
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./scripts/bootstrap/css/bootstrap.css">
    <!-- Página Relatório -->
    <link rel="stylesheet" href="./css/relatorio.css">
</head>

<body>
    <div class="topbar">
        <ul class="menu">
            <li class="menu-item"><a href="#PaginaHome" class="menu-link" onclick="abrirHomePage()">Home Page</a></li>
            <li class="menu-item"><a href="#Cadastro" class="menu-link" onclick="abrirCadastro()">Cadastro</a></li>
            <li class="menu-item"><a href="#Relatorio" class="menu-link" onclick="abrirRelatorio()">Relatório</a></li>
        </ul>
    </div>
   
    <div id="pagHomePage" style="display: none;">
        <?php include './pgs/home.php' ?>
    </div>
    <div id="pagCadastro" style="display: none;">
        <?php include './pgs/cadastro.php' ?>
    </div>
    <div id="pagRelatorio" style="display: none;">
        <?php include './pgs/relatorio.php' ?>
    </div>

</body>

<script>
    function abrirHomePage() {
        document.getElementById('pagHomePage').style.display = '';
        document.getElementById('pagCadastro').style.display = 'none';
        document.getElementById('pagRelatorio').style.display = 'none';
    }

    function abrirCadastro() {
        document.getElementById('pagHomePage').style.display = 'none';
        document.getElementById('pagCadastro').style.display = '';
        document.getElementById('pagRelatorio').style.display = 'none';
    }

    function abrirRelatorio() {
        document.getElementById('pagHomePage').style.display = 'none';
        document.getElementById('pagCadastro').style.display = 'none';
        document.getElementById('pagRelatorio').style.display = '';
    }
</script>
<script src="./js/index.js"></script>
<!-- Página Home -->
<script src="./scripts/datatables/datatables.js"></script>
<script src="./js/home.js"></script>
<!-- Página Cadastro -->
<script src="./scripts/bootstrap/js/bootstrap.js"></script>
<!-- Página Relatório -->
<script src="./js/relatorio.js"></script>
</html>