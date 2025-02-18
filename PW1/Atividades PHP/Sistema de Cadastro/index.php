<?php
if (isset($_POST['cadastrar'])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    try {
        // Conectar ao banco de dados usando PDO
        $con = new PDO('mysql:host=localhost;dbname=bd_sistema', 'root', '');

        // Consulta SQL
        $query = "INSERT INTO clientes (nome, endereco, bairro, cep, cidade, estado) VALUES (:nome, :endereco, :bairro, :cep, :cidade, :estado)";

        // Preparar a consulta
        $stmt = $con->prepare($query);

        // Bind dos valores
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cep', $cep);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':estado', $estado);

        // Executar a consulta
        $stmt->execute();

        //echo "Cadastro realizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <nav
                        class="navbar navbar-expand-lg bg-dark-subtle border border-primary border-3 border-opacity-50">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Home</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="consulta.php">Consulta</a>
                                    </li>
                            </div>
                        </div>
                    </nav>
                    <hr size="8" style="background-color: #00BFFF">
                </div>
                <div class="row">
                </div>
                <div class="col-lg-3 offset-lg-3 bg-dark" style="width: 600px; height: 850px;">
                    <div class="card bg-info border-3">
                        <div class="card-body" style=" height: 540px; background-color: #363636; height: 560px;">
                            <form method="POST" action="index.php">
                                <div class="mb-3">
                                    <div>
                                        <div class="mb-1">
                                            <label class="form-label user-select-none text-light"
                                                style="padding-right: 600px;">Nome</label>
                                            <input type="text" name="nome" class="form-control opacity-75"
                                                placeholder="Insira um Nome">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-1">
                                            <label class="form-label user-select-none text-light"
                                                style="padding-right: 600px;">Endereço</label>
                                            <input type="text" name="endereco" class="form-control opacity-75"
                                                placeholder="Insira um Endereço">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="mb-1">
                                            <label class="form-label user-select-none text-light"
                                                style="padding-right: 600px;">Bairro</label>
                                            <input type="text" name="bairro" class="form-control opacity-75"
                                                placeholder="Insira um bairro">
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label user-select-none text-light"
                                            style="padding-right: 600px;">Cep</label>
                                        <input type="text" name="cep" class="form-control opacity-75"
                                            placeholder="Insira um cep">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-1">
                                        <label class="form-label user-select-none text-light"
                                            style="padding-right: 600px;">Cidade</label>
                                        <input type="text" name="cidade" class="form-control opacity-75"
                                            placeholder="Insira uma cidade">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-1">
                                        <label class="form-label user-select-none text-light"
                                            style="padding-right: 600px;">Estado</label>
                                        <select class="form-select opacity-75" name="estado">
                                            <option selected>Selecione um estado</option>
                                            <option>AC</option>
                                            <option>AL</option>
                                            <option>AP</option>
                                            <option>AM</option>
                                            <option>BA</option>
                                            <option>CE</option>
                                            <option>DF</option>
                                            <option>ES</option>
                                            <option>GO</option>
                                            <option>MA</option>
                                            <option>MT</option>
                                            <option>MS</option>
                                            <option>MG</option>
                                            <option>PA</option>
                                            <option>PB</option>
                                            <option>PR</option>
                                            <option>PE</option>
                                            <option>PI</option>
                                            <option>RJ</option>
                                            <option>RN</option>
                                            <option>RS</option>
                                            <option>RO</option>
                                            <option>RR</option>
                                            <option>SC</option>
                                            <option>SP</option>
                                            <option>SE</option>
                                            <option>TO</option>
                                        </select>
                                    </div>
                                    <div>
                                        <input type="hidden" name="form" value="f_form">
                                        <div>
                                            <br>
                                            <div class="mb-5">
                                                <button class="btn btn-primary" name="cadastrar"
                                                    type="submit">Cadastrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>