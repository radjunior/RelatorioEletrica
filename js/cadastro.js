document.getElementById("btnSalvar").addEventListener("click", function(event) {
    var msgErro = '';
    if (document.getElementById('txtTag').value == '') {
        msgErro += 'Insira a TAG\n';
    }
    if (document.getElementById('txtDescricao').value == '') {
        msgErro += 'Insira a Descrição\n';
    }
    if (document.getElementById('txtRotacao').value == '') {
        msgErro += 'Insira a Rotação\n';
    }
    if (document.getElementById('txtPotencia').value == '') {
        msgErro += 'Insira a Potencia\n';
    }
    if (document.getElementById('txtSetor').value == '') {
        msgErro += 'Insira o Setor\n';
    }
    if (document.getElementById('txtDataManutencao').value == '') {
        msgErro += 'Insira a Data de Manutenção\n';
    }
    if (document.getElementById('flDocManutencao').value == '') {
        msgErro += 'Insira um arquivo\n';
    }
    if (msgErro != '') {
        event.preventDefault()
        alert(msgErro);
    } else {
        confirm("Cadastro realizado com sucesso!")
    }
});

document.getElementById("rbInterna").addEventListener("click", function(event) {
    this.checked = true;
    document.getElementById("rbExterna").checked = false;
});

document.getElementById("rbExterna").addEventListener("click", function(event) {
    this.checked = true;
    document.getElementById("rbInterna").checked = false;
});