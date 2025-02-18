<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <title>Projeto Web</title>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <form>
                    <div class="mb-3">
                        <label for="Nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" aria-describedby="">
                        <label for="Telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="Telefone" aria-describedby="">
                        <label for="Orgem" class="form-label">Origem</label>
                        <input type="text" class="form-control" id="Origem" aria-describedby="">
                        <label for="Data_con" class="form-label">Data de Contato</label>
                        <input type="text" class="form-control" id="Contato" aria-describedby="">
                        <label for="Observacao" class="form-label">Observação</label>
                        <input type="text" class="form-control" id="Obs" aria-describedby="">
                        <br>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Column
            </div>
        </div>
    </div>
</body>

</html>