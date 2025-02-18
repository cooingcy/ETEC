<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página inicíal</title>
</head>
<body>
  <div class="container text-center">
  <div class="row align-items-center">
      <div class="col">
        <?php
        session_start();

          $nomevalido = "Matheus";
          $senhavalida = "1234";

          if(isset($_POST['nome']) && isset($_POST['senha'])) {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $arquivo = fopen("Dados.txt", "a");
            fwrite($arquivo, "nome: " . $_POST['nome'] . "\n");
            fwrite($arquivo, "senha: " . $_POST['senha'] . "\n");
            fclose($arquivo);

          if($nome === $nomevalido && $senha === $senhavalida) {
            echo "<h1> Bem vindo(a) " . $_POST['nome'] . "!</h1>";
          } else {
            echo"<p> Nome ou senha está incorreto, por favor tente novamente </p>";
          }
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>