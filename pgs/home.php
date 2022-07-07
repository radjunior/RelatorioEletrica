<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../scripts/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../scripts/datatables/datatables.css">
    <link rel="stylesheet" href="../css/home.css">
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
            <h1>Registros das últimas atividades</h1>
        </div>
        <div class="tabela">
            <table id="tableHome" class="display">
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Atividades</th>
                        <th>Hora (Hoje)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>RADJUNIOR</td>
                        <td>Inseriu Registro</td>
                        <td>13:50</td>
                    </tr>
                    <tr>
                        <td>RADJUNIOR</td>
                        <td>Apagou Registro</td>
                        <td>13:52</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

<script src="../scripts/bootstrap/js/bootstrap.js"></script>
<script src="../scripts/datatables/datatables.js"></script>
<script src="../js/home.js"></script>

</html>