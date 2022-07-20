<?php
require_once "../app/conexao.php";

$user = $_POST['txtUsername'];
$pass = $_POST['txtPassword'];

$custo = '08';
$salt = 'Cf1f11ePArKlBJomM0F6aJ';
$hash = crypt($pass, '$2a$' . $custo . '$' . $salt . '$');

try {
    $conn = ConexaoLocal::getConnection();
    $query = "SELECT * FROM USUARIO WHERE USUARIO = '$user'";
    $stmt = $conn->query($query);
    foreach ($stmt as $item) {
        if(crypt($pass, $item['PASSWORD']) === $item['PASSWORD']){
            header('Location: ../../pgs/home.php');
            exit();
        } else {
            /*header('Location: ../../index.php');
            exit();*/
        }
    }
} catch (PDOException $e) {
    echo "Erro: <br>" . $e;
}
