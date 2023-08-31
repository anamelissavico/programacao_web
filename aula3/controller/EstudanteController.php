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
        if($_SERVER['REQUEST_METHOD']== 'GET'){
            require_once $_SERVER ['DOCUMENT_ROOT'] . '/aula3/view/EstudanteForm.php';
        }elseif ($_SERVER['REQUEST_METHOD']== 'POST'){
            $nome = $_POST['nome'];
            $idade= $_POST ['idade'];

            $estudanteModel = new EstudanteModel();
            $estudanteModel->salvarModel($nome,$idade);

            header('Location: http://localhost:8081/aula3/?controller=Estudante&acao=listar');
            exit();

        }
        
        
    }


}