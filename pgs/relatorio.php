<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link rel="stylesheet" href="../scripts/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../scripts/datatables/datatables.css">
    <link rel="stylesheet" href="../css/relatorio.css">
</head>

<body>
    <div class="topbar">
        <ul class="menu">
            <li class="menu-item"><a href="./home.php" class="menu-link">Home Page</a></li>
            <li class="menu-item"><a href="./cadastro.php" class="menu-link">Cadastro</a></li>
            <li class="menu-item"><a href="./relatorio.php" class="menu-link">Relatório</a></li>
        </ul>
    </div>
    <div class="main">
        <div class="title">
            <h1>Relatório de Manutenção</h1>
        </div>
        <div class="tabela">
            <table id="tableRelatorio" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TAG</th>
                        <th>Setor</th>
                        <th>Descrição</th>
                        <th>Potência</th>
                        <th>Rotação</th>
                        <th>Data Manutenção</th>
                        <th>Data Inserção</th>
                        <th>Anexo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <th>15415F</th>
                        <th>INSTRUMENTAÇÃO</th>
                        <th>PORCA</th>
                        <th>1254,12 CV</th>
                        <th>523 RPM</th>
                        <th>30/07/2022</th>
                        <th>29/06/2022</th>
                        <th>file.zip</th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>15489D</th>
                        <th>AUTOMAÇÃO</th>
                        <th>PARAFUSO</th>
                        <th>1264,45 CV</th>
                        <th>451 RPM</th>
                        <th>30/07/2022</th>
                        <th>29/06/2022</th>
                        <th>file.zip</th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>94875S</th>
                        <th>AUTOMAÇÃO</th>
                        <th>VALVULA ESCAPE</th>
                        <th>9845,15 CV</th>
                        <th>515 RPM</th>
                        <th>30/07/2022</th>
                        <th>29/06/2022</th>
                        <th>file.zip</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

<script src="../scripts/bootstrap/js/bootstrap.js"></script>
<script src="../scripts/datatables/datatables.js"></script>
<script src="../js/relatorio.js"></script>

</html>