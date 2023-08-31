<?php
require_once $_SERVER ['DOCUMENT_ROOT'] . '/aula3/model/Database.php';

class EstudanteModel{
    private int $idade;
    private string $nome;
    private $database;

    //Getters and setters

    public function __construct()
    {
        $this->database = new Database();
    }
    public function salvarModel(string $nome, int $idade){
        //Salvar no BD
        $sql = ("INSERT INTO estudantes (nome, idade) VALUES ('$nome', '$idade')");
        $this->database->insert($sql);
    }

    public function listarModel(): array {

        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");
        
        return $dadosArray;
    }
}