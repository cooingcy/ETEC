<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Votação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
  <body>
<body style="background-color: #f3f3f3">
<div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
    <h1>Escolha uma opção abaixo: </h1>
    <form name="opcoes" method="POST" action="votos.php">
        <input type="radio" id="opcao1" name="op" value="1"> Opção 1 <br>
        <input type="radio" id="opcao2" name="op" value="2"> Opção 2 <br>
        <input type="radio" id="opcao3" name="op" value="3"> Opção 3 <br>
        <br>
        <input type="submit" name="votar" value="Votar" style="background-color: #1E90FF; width: 100px;">
    </form>
    </div>
  </div>
</div>
</body>
</html>