<?php
require_once $_SERVER ['DOCUMENT_ROOT'] . '/aula3/model/EstudanteModel.php';
class EstudanteController{
    public function listar(){

        //Instanciar a model
        //Chamar o metodo listar na model
        $estudanteModel = new EstudanteModel();
        $listaEstudantes = $estudanteModel->listarModel();
        $_REQUEST["estudantes"] = $listaEstudantes;

        require_once $_SERVER ['DOCUMENT_ROOT'] . '/aula3/view/litarEstudanteView.php';
        //Renderizar a view 
        //AQUI
    }

    public function salvar()
     {
        $nome = $_GET['nome'];
        $idade= $_GET ['idade'];

        $estudanteModel = new EstudanteModel();
        $estudanteModel->salvarModel($nome,$idade);
        
    }


}