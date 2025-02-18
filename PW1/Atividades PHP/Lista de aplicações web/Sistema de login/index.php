<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body style="background-color: #DCDCDC;">
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
        <br>
        <form name="dados_login" method="POST" action="entrar.php">
            <label for="nome" style="padding-right: 200px;">Nome:</label><br>
            <input type="text" name="nome" id="nome" style="width: 250px;" placeholder="Digite seu nome de usuario"><br>
            <label for="senha" style="padding-right: 200px;">Senha:</label><br>
            <input type="text" name="senha" id="senha" style="width: 250px;" placeholder="Insira sua senha"><br>
            <br>
            <input type="submit" name="entrar" id="entrar" value="Entrar" style="background-color: #00BFFF; width: 100px;">
        </form>
    </div>
  </div>
</div>
</body>
</html>