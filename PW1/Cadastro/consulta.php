<?php
session_start();
include_once('config.php');

/*if ($con->connect_errno) {
    echo "Falha ao conectar: " . $con->connect_error;
} else {
    echo "Conexão bem-sucedida!";*/

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultar Dados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .table-fixed {
            table-layout: fixed;
        }

        .table-fixed th,
        .table-fixed td {
            overflow: hidden;
            text-overflow: ellipsis;
            word-wrap: break-word;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <div class="bg-dark" style="height: 940px;">
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <nav class="navbar navbar-expand-lg border border-info border-3 border-opacity-50 rounded"
                        style="background-color: #ebebeb">
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
                    <div class="col-lg-10 offset-lg-1">
                        <br>
                        <div class="row" style="margin-left: 400px;">
                            <?php
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                            ?>
                        </div>
                        <div class="card border border-info border border-start-0 border border-3 rounded">
                            <div class="card-body table-responsive" style="height: 300px; background-color: #878584;">
                                <table class="table table-dark table-hover table-fixed">
                                    <thead>
                                        <tr style="height: 50px;">
                                            <th scope="col">💠</th>
                                            <th scope="col" class="d-none d-md-table-cell"> </th>
                                            <th scope="col" class="d-none d-md-table-cell">Nome</th>
                                            <th scope="col" class="d-none d-md-table-cell">Endereço</th>
                                            <th scope="col" class="d-none d-md-table-cell">Bairro</th>
                                            <th scope="col" class="d-none d-md-table-cell">Cep</th>
                                            <th scope="col" class="d-none d-md-table-cell">Cidade</th>
                                            <th scope="col" class="d-none d-md-table-cell">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $query_usuarios = "SELECT id, nome, endereco, bairro, cep, cidade, estado FROM clientes ORDER BY id DESC";
                                        $result_usuarios = mysqli_query($con, $query_usuarios);
                                        echo "<form method='POST'>";
                                        $count = 1;

                                        while ($row = mysqli_fetch_assoc($result_usuarios)) {
                                            extract($row);
                                            echo "<tr>";
                                            echo "<th scope='row'>$count</th>";
                                            echo "<td><input class='form-check-input' type='checkbox' name='clientes[$id]' value='$id'></td>";
                                            echo "<td>$nome</td>";
                                            echo "<td>$endereco</td>";
                                            echo "<td>$bairro</td>";
                                            echo "<td>$cep</td>";
                                            echo "<td>$cidade</td>";
                                            echo "<td>$estado</td>";
                                            echo "</tr>";
                                            $count++;
                                        }

                                        echo "</tbody>";
                                        echo "</table>";

                                        echo "<div class='position-absolute bottom-0 start-0 opacity-75' style='top: 230px;'>";
                                        echo "<button type='submit' class='btn btn-danger' formaction='excluir.php' name='excluir' value='excluir' style='margin-left: 15px;'>Excluir Dados</button>";
                                        echo "<button type='submit' class='btn btn-light' formaction='editar.php' name='editar' value='editar' style='margin-left: 30px;'>Editar Dados</button>";
                                        echo "</div>";

                                        echo "</form>";

                                        ?>
                                    </tbody>
                                </table>
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