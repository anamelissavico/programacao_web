<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cadastro de Estudante</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <header id="header" class="bg-black m-0 text-white p-3 text-center">
                <h1 id="headerTitulo">Cadastro de Estudante</h1>
            </header>
            <section>
                <form method= "POST" action="/aula3/?controller=Estudante&acao=salvar">
                    <div class="mb-3 mt-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="idade" class="form-label">Idade:</label>
                        <input type="number" class="form-control" id="idade" placeholder="Digite sua idade" name="idade">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </section>
    </div>

    </header>
</body>

</html>