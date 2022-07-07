<?php
require_once "../app/conexao.php";

$tag = $_POST['txtTag'] ?? null;
$setor = $_POST['txtSetor'] ?? null;
$descricao = $_POST['txtDescricao'] ?? null;
$potencia = $_POST['txtPotencia'] ?? null;
$rotacao = $_POST['txtRotacao'] ?? null;
$data_manutencao = $_POST['txtDataManutencao'] ?? null;
$userLogado = $_POST['txtUsuarioLogado'] ?? null;
$rbInterna = $_POST['rbInterna'] ?? null;
$rbExterna = $_POST['rbExterna'] ?? null;
$flDocManutencao = $_FILES['flDocManutencao'];
$tipoManutencao = '';

if ($rbInterna == 'on')
    $tipoManutencao = 'interna';
else
    $tipoManutencao = 'externa';

if ($flDocManutencao['error'])
    die("Falha ao enviar o arquivo");

$pasta = "C:/xampp/htdocs/Temp/relatorio-eletrica/anexos/";
$nomeArquivo = $flDocManutencao['name'];
$novoNome = uniqid();
$extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

if ($extensao != 'jpg' && $extensao != 'png')
    die("Tipo de arquivo não aceito!");

$statusEnvioArquivo = move_uploaded_file($flDocManutencao['tmp_name'], $pasta . $novoNome . "." . $extensao);
$path = $pasta . $novoNome . "." . $extensao;

try {
    $conn = ConexaoLocal::getConnection();
    $query = "INSERT INTO MANUTENCAO
                (TAG, 
                SETOR, 
                DESCRICAO, 
                POTENCIA, 
                ROTACAO, 
                DATA_MANUTENCAO,
                TIPO_MANUTENCAO,
                PATH_ANEXO,
                USUARIO) 
                VALUES 
                (:col01, 
                :col02, 
                :col03, 
                :col04, 
                :col05, 
                :col06,
                :col07,
                :col08,
                :col09)";
    $stmt = $conn->prepare($query);
    $stmt->execute(array(
        ':col01' => $tag,
        ':col02' => $setor,
        ':col03' => $descricao,
        ':col04' => $potencia,
        ':col05' => $rotacao,
        ':col06' => $data_manutencao,
        ':col07' => $tipoManutencao,
        ':col08' => $path,
        ':col09' => $userLogado
    ));
} catch (Exception $exc) {
    echo $exc;
    exit;
}

header('Location: ../../pgs/cadastro.php');
exit();
