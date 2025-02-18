<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('NAME', 'bd_sistema');

$con = new mysqli(HOST, USER, PASSWORD, NAME);

if ($con->connect_errno) {
    echo "Falha ao conectar: " . $con->connect_error;
} else {
    echo "Conexão bem-sucedida!";

    $sql = "SELECT * FROM clientes";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        // Exibir os dados em uma tabela HTML
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['endereco'] . "</td>";
            echo "<td>" . $row['bairro'] . "</td>";
            echo "<td>" . $row['cep'] . "</td>";
            echo "<td>" . $row['cidade'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            // ... continuar para os demais campos
            echo "</tr>";
        }
    } elseif ($result) {
        echo "<tr><td colspan='7'>Nenhum registro encontrado.</td></tr>";
    } else {
        echo "Erro na consulta: " . $con->error;
    }
    

    // Fechar a conexão
    $con->close();
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultar Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <nav class="navbar navbar-expand-lg border border-primary border-3 border-opacity-50"
                        style="background-color: #4F4F4F;">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">Home</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="">Consulta</a>
                                    </li>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="row">
                    <div class="col">
                        <br>
                        <div class="col-lg-1 offset-lg-1" style="width: 900px;">
                            <div class="card">
                                <div class="card-body" style="height: 200px;">
                                    <table class="table table-dark table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">💠</th>
                                                <th scope="col" class="d-none d-md-table-cell">Nome</th>
                                                <th scope="col" class="d-none d-md-table-cell">Endereço</th>
                                                <th scope="col" class="d-none d-md-table-cell">Bairro</th>
                                                <th scope="col" class="d-none d-md-table-cell">Cep</th>
                                                <th scope="col" class="d-none d-md-table-cell">Cidade</th>
                                                <th scope="col" class="d-none d-md-table-cell">Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <?php echo $row['nome']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['endereco']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['bairro']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['cep']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['cidade']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['estado']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td> 
                                                    <td colspan="6">
                                                        <strong>Nome:</strong><?php echo $row['nome']; ?><br>
                                                        <strong>Endereço:</strong><?php echo $row['endereco']; ?><br>
                                                        <strong>Bairro:</strong><?php echo $row['bairro']; ?><br>
                                                        <strong>Cep:</strong><?php echo $row['cep']; ?><br>
                                                        <strong>Cidade:</strong><?php echo $row['cidade']; ?><br>
                                                        <strong>Estado:</strong><?php echo $row['estado']; ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>