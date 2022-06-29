<html>

<body>
    <div class="main">
        <h1>Cadastro</h1>
        <form action="" method="post">
            <div class="title">
                <h6>Manutenção</h6>
            </div>
            <div class="radiosButtons">
                <div class="radios">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">Interna</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">Externa</label>
                    </div>
                </div>
            </div>

            <div class="cardCadastro">
                <div class="form-floating">
                    <input type="data" class="form-control" id="tag" placeholder="TAG">
                    <label for="tag">TAG</label>
                </div>
                <div class="form-floating">
                    <input type="data" class="form-control" id="rotacao" placeholder="Rotação">
                    <label for="rotacao">Rotação (RPM)</label>
                </div>
                <div class="form-floating">
                    <input type="data" class="form-control" id="descricao" placeholder="Descrição">
                    <label for="descricao">Descrição</label>
                </div>
                <div class="form-floating">
                    <input type="data" class="form-control" id="potencia" placeholder="Potência">
                    <label for="potencia">Potência (CV)</label>
                </div>
                <div class="form-floating">
                    <input type="data" class="form-control" id="setor" placeholder="Setor">
                    <label for="setor">Setor</label>
                </div>
                <div class="form-floating">
                    <input type="date" class="form-control" id="dataManutencao" placeholder="Data de Manutenção">
                    <label for="dataManutencao">Data de Manutenção</label>
                </div>
                <input type="hidden" id="dataInsert">
                <input type="hidden" id="usuarioLogado">
            </div>

            <div class="file">
                <div class="mb-3">
                    <label for="formFile" class="form-label"></label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>

            <div class="buttonsAcao">
                <button type="reset" class="btn btn-outline-danger">Limpar</button>
                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>