<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../scripts/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../scripts/datatables/datatables.css">
    <link rel="stylesheet" href="../css/cadastro.css">
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
        <h1>Cadastro</h1>
        <form enctype="multipart/form-data" action="../dao/cadastro/cadastroDAO.php" method="POST">
            <div class="title">
                <h6>Manutenção</h6>
            </div>
            <div class="radiosButtons">
                <div class="radios">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rbInterna" id="rbInterna" checked>
                        <label class="form-check-label" for="rbInterna">Interna</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rbExterna" id="rbExterna">
                        <label class="form-check-label" for="rbExterna">Externa</label>
                    </div>
                </div>
            </div>

            <div class="cardCadastro">
                <div class="form-floating">
                    <input type="text" class="form-control" id="txtTag" name="txtTag" placeholder="TAG">
                    <label for="txtTag">TAG</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="txtRotacao" name="txtRotacao" placeholder="Rotação">
                    <label for="txtRotacao">Rotação (RPM)</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" placeholder="Descrição">
                    <label for="txtDescricao">Descrição</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="txtPotencia" name="txtPotencia" placeholder="Potência">
                    <label for="txtPotencia">Potência (CV)</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" id="txtSetor" name="txtSetor" placeholder="Setor">
                    <label for="txtSetor">Setor</label>
                </div>
                <div class="form-floating">
                    <input type="date" class="form-control" id="txtDataManutencao" name="txtDataManutencao" placeholder="Data de Manutenção">
                    <label for="dataManutencao">Data de Manutenção</label>
                </div>
                <input type="hidden" name="txtUsuarioLogado" value="RADJUNIOR">
            </div>

            <div class="file">
                <div class="mb-3">
                    <label for="flDocManutencao" class="form-label"></label>
                    <input class="form-control" type="file" id="flDocManutencao" name="flDocManutencao">
                </div>
            </div>

            <div class="buttonsAcao">
                <button type="reset" class="btn btn-outline-danger">Limpar</button>
                <button type="submit" class="btn btn-outline-success" id="btnSalvar">Salvar</button>
            </div>
        </form>
    </div>
</body>
<script src="../scripts/bootstrap/js/bootstrap.js"></script>
<script src="../scripts/datatables/datatables.js"></script>
<script src="../js/cadastro.js"></script>

</html>