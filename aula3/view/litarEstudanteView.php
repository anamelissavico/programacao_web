<?php $estudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Lista de estudantes</title>
</head>

<body>
    <div class="container-fluid">
        <header id="header" class="bg-black m-0 text-white p-3 text-center">
            <h1 id="headerTitulo">Semana da acessibilidade</h1>
        </header>
        <section>
            <div class="row">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets\style\foto1.jpg" alt="Pessoas e sua diversidade" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets\style\foto2.jpeg" alt="Pessoas e unidas mostrando como é a inclusão"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets\style\foto3.jpg" alt="Pessoas diferentes unidas" class="d-block w-100">
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div class="row">
            <br>
            <br>
            <a href="/aula3/?controller=Estudante&acao=salvar" class="btn btn-success w-20">Cadastrar Estudante</a>
            <br>
            <br>
            </div>
            <div class="row">
            <table class="table">
                
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                    </tr>


                    <?php foreach ($estudantes as $estudanteAtual) { ?>
                        <tr>
                            <td><?php echo $estudanteAtual["nome"];?></td> 
                            <td><?php echo $estudanteAtual["idade"];?></td>
                        </tr>
                    <?php } ?>

        
                    
            </table>
            </div>
        </section>
    </div>

</body>

</html>