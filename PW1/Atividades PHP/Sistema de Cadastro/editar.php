<?php

session_start();
ob_start();

include_once('config.php');

$dado = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dado);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atualizar Dados</title>
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
                    <h3 class="user-select-none" style="color: white;">Atualizar Cadastro</h3>
                </div>
            </div>
            <?php



            if (!empty($dado['clientes'])) {
                $valor_user = implode(", ", $dado['clientes']);
                //var_dump($valor_user);
            
                $querry_usuarios = "SELECT id, nome, endereco, bairro, cep, cidade, estado 
                        FROM clientes 
                        WHERE id IN ($valor_user)";

                $result_usuarios = $con->prepare($querry_usuarios);
                $result_usuarios->execute();
                $result_usuarios->store_result();

                $result_usuarios->bind_result($id, $nome, $endereco, $bairro, $cep, $cidade, $estado);


                echo '<div class="row">
        <div class="col-lg-3 offset-lg-3 bg-dark" style="width: 600px; height: 870px;">
            <div class="card bg-info border-3">
                <div class="card-body" style=" height: 540px; background-color: #363636; height: 590px;">
                    <form method="POST" action="processa_edit.php">
                        <div class="mb-3">';


                while ($result_usuarios->fetch()) {
                    echo "<input lass='form-check-input' type='hidden' name='id[]' value='$id'>";
                    echo '<div class="mb-3">
                                <label class="form-label user-select-none text-light" style="padding-right: 600px;">Nome</label>
                                <input type="text" name="nome[]" class="form-control opacity-75" placeholder="Insira um Nome" 
                                    value="' . $nome . '">
                            </div>';

                    echo '<div class="mb-1">
            <label class="form-label user-select-none text-light"style="padding-right: 600px;">Endereço</label>
            <input type="text" name="endereco[]" class="form-control opacity-75" placeholder="Insira um Endereço"
            value="' . $endereco . '">
            </div>';

                    echo '<div class="mb-3">
                <label class="form-label user-select-none text-light" style="padding-right: 600px;">Bairro</label>
                <input type="text" name="bairro[]" class="form-control opacity-75" placeholder="Insira um Bairro" 
                value="' . $bairro . '">
            </div>';

                    echo '<div class="mb-3">
                <label class="form-label user-select-none text-light" style="padding-right: 600px;">Cep</label>
                <input type="text" name="cep[]" class="form-control opacity-75" placeholder="Insira um Cep" 
                value="' . $cep . '">
            </div>';

                    echo '<div class="mb-3">
                <label class="form-label user-select-none text-light" style="padding-right: 600px;">Cidade</label>
                <input type="text" name="cidade[]" class="form-control opacity-75" placeholder="Insira uma Cidade" 
                value="' . $cidade . '">
            </div>';

                    echo '<div class="mb-1">
            <label class="form-label user-select-none text-light" style="padding-right: 600px;">Estado</label>
            <select class="form-select opacity-75" name="estado[]">
                <option selected>Selecione um estado</option>
                <option value="AC"' . ($estado == 'AC' ? ' selected' : '') . '>AC</option>
                <option value="AL"' . ($estado == 'AL' ? ' selected' : '') . '>AL</option>
                <option value="AP"' . ($estado == 'AP' ? ' selected' : '') . '>AP</option>
                <option value="AM"' . ($estado == 'AM' ? ' selected' : '') . '>AM</option>
                <option value="BA"' . ($estado == 'BA' ? ' selected' : '') . '>BA</option>
                <option value="CE"' . ($estado == 'CE' ? ' selected' : '') . '>CE</option>
                <option value="DF"' . ($estado == 'DF' ? ' selected' : '') . '>DF</option>
                <option value="ES"' . ($estado == 'ES' ? ' selected' : '') . '>ES</option>
                <option value="GO"' . ($estado == 'GO' ? ' selected' : '') . '>GO</option>
                <option value="MA"' . ($estado == 'MA' ? ' selected' : '') . '>MA</option>
                <option value="MT"' . ($estado == 'MT' ? ' selected' : '') . '>MT</option>
                <option value="MS"' . ($estado == 'MS' ? ' selected' : '') . '>MS</option>
                <option value="MG"' . ($estado == 'MG' ? ' selected' : '') . '>MG</option>
                <option value="PA"' . ($estado == 'PA' ? ' selected' : '') . '>PA</option>
                <option value="PB"' . ($estado == 'PB' ? ' selected' : '') . '>PB</option>
                <option value="PR"' . ($estado == 'PR' ? ' selected' : '') . '>PR</option>
                <option value="PE"' . ($estado == 'PE' ? ' selected' : '') . '>PE</option>
                <option value="PI"' . ($estado == 'PI' ? ' selected' : '') . '>PI</option>
                <option value="RJ"' . ($estado == 'RJ' ? ' selected' : '') . '>RJ</option>
                <option value="RN"' . ($estado == 'RN' ? ' selected' : '') . '>RN</option>
                <option value="RS"' . ($estado == 'RS' ? ' selected' : '') . '>RS</option>
                <option value="RO"' . ($estado == 'RO' ? ' selected' : '') . '>RO</option>
                <option value="RR"' . ($estado == 'RR' ? ' selected' : '') . '>RR</option>
                <option value="SC"' . ($estado == 'SC' ? ' selected' : '') . '>SC</option>
                <option value="SP"' . ($estado == 'SP' ? ' selected' : '') . '>SP</option>
                <option value="SE"' . ($estado == 'SE' ? ' selected' : '') . '>SE</option>
                <option value="TO"' . ($estado == 'TO' ? ' selected' : '') . '>TO</option>
                </selected>
                </div>';


                }

                $result_usuarios->free_result();
                echo '<input type="submit" name="cadastrar" value="Atualizar" class="btn btn-primary" style="margin-top: 20px;">';
                echo '</form>
                </div>
                </div>
                </div>
                </div>';

            } else {
                $_SESSION['msg'] = "<p> Selecione um usuário!</p>";

                header("Location: consulta.php");
            }
            ?>
</body>

</html>