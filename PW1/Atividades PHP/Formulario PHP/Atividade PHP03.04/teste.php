<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid" style="background-color: #0d6efd; padding-bottom: 1%;">
                        <a class="navbar-brand" href="#" style="color: white;">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#" style="color: white;">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" style="padding-left: 20px;">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row ">
                <div class="col">
                    <br>
                    <div style="padding-right: 380px;">
                        <h1 class="text-left">Consultar - Contatos Agendados</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="background-color: #0d6efd; max-width: 720px; height: 65px; margin: 0 auto;">
                    <?php
                        echo "<b> <br>";
                        echo  $_POST['Nome']; 
                        echo  "ㅤ";
                        echo  $_POST['Origem'];
                        echo  "ㅤ";
                        echo  $_POST['Telefone'];
                        echo  "ㅤ";
                        echo  $_POST['Data'];
                        echo  "ㅤ";
                        echo  $_POST['Obs'];
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>