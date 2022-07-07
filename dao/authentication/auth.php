<?php
require_once "../app/conexao.php";

$user = $_POST['txtUsername'];
$pass = $_POST['txtPassword'];

echo $user . "<br>" . $pass;
