<?php 
require_once "conexao.php";
class RelatorioDAO {
    
    public function __construct() {}

    public static function getManutencao() {
        try {
            $conn = ConexaoLocal::getConnection();
            $query = "SELECT * FROM MANUTENCAO";
            $stmt = $conn->query($query);
            return $stmt;
        } catch (PDOException $e) {
            throw new Exception($e);
        }
    }
}