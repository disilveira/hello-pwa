<?php

require_once('Database.php');

class Kilometragem {

    function __construct() {
        $this->pdo = Database::conexao();
    }

    public $id;
    public $nome_motorista;
    public $km;
    public $data_envio;
    public $ativo;

    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }

    public function getKilometragens(){
        try{
            $stmt = $this->pdo->prepare("
                SELECT * FROM kilometragem 
                WHERE ativo = 1
                ORDER BY id DESC");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $result;
        } catch (PDOException $exc) {
            echo get_class($this).": {$exc->getMessage()}";
        }
    }

}