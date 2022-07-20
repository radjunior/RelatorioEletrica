<?php
require_once "../dao/app/relatorioDAO.php";
$stmt = RelatorioDAO::getManutencao();
?>
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
                    <?php foreach ($stmt as $item) { 
                        $output  = str_replace("C:/xampp/htdocs/", "", $item['PATH_ANEXO']);
                        ?>
                        <tr>
                            <td><?php echo $item['ID'] ?></td>
                            <td><?php echo $item['TAG'] ?></td>
                            <td><?php echo $item['SETOR'] ?></td>
                            <td><?php echo $item['DESCRICAO'] ?></td>
                            <td><?php echo $item['POTENCIA'] ?></td>
                            <td><?php echo $item['ROTACAO'] ?></td>
                            <td><?php echo $item['DATA_MANUTENCAO'] ?></td>
                            <td><?php echo $item['DATA_INSERCAO'] ?></td>
                            <td><a target="_blank" href="http://localhost/<?php echo $output?>">Anexo</a> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<script src="../scripts/bootstrap/js/bootstrap.js"></script>
<script src="../scripts/datatables/datatables.js"></script>
<script src="../js/relatorio.js"></script>

</html>