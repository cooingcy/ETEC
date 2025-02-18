<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
  <body>
    <div class="container" style="width: 1100px;">
        <div class="row">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid" style=" background-color: #0d6efd;">
                <a class="navbar-brand" href="#" style="color: white;">SISTEMA WEB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#" style="color: white;">Cadastrar</a>
                        <a class="nav-link disabled">Consultar</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
        <div class="row">
            <div class="col">
                <br>
                <h1>Cadastrar - Agendamento de Potenciais Clientes</h1>
                <p> Sistema utilizado para agendamento de serviços.</p>
            </div>
        </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3" style="padding-left: 30px;">
                        <label for="formGroupExampleInput" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                        <div class="mb-3" style="padding-left: 30px;">
                            <label for="formGroupExampleInput2" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="(xx) xxxxx-xxxx">
                        </div>
                            <div class="col-md-4" style="padding-left: 30px;">
                                    <label for="inputState" class="form-label">Origem:</label>
                                        <select id="inputState" class="form-select" style="width: 319%">
                                        <option selected>Celular</option>
                                        <option>Telefone fixo</option>
                                        </select>
                            </div>
                            <br>
                                <p1 style="padding-left: 30px;">Data do contato:</p1>
                                <div style="padding-left: 30px;">
                                    <input type="datetime-local" id="Test_DatetimeLocal" style="width: 100%; height: 50px; padding-left: 12px;">
                                </div>
                                <br>
                                    <div style="padding-left: 30px;">
                                        <div class="form-floating">Observação</div>
                                            <textarea class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2"></label>
                                        </div>
                                        <br>
                                            <div style="padding-left: 30px;">

                                                <form method="POST" action="teste.php">
                                                <input type="submit" name="Cadastrar" value="Cadastrar" style="background-color:#0d6efd; color: white; height: 55px; width: 110px; border-radius: 10px; border: 0px;">
                                                </form>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
  </body>
</html>