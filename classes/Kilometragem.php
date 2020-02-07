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

    public function cadastrarKilometragem(){
        try {
            $stmt = $this->pdo->prepare("INSERT INTO kilometragem (nome_motorista, km) VALUES 
                (:nome_motorista, :km)");
            $param = array(
                ":nome_motorista" => $this->nome_motorista,
                ":km" => $this->km
            );
            return $stmt->execute($param);
        } catch (PDOException $exc) {
            echo get_class($this).": {$exc->getMessage()}";
        }
    }

}