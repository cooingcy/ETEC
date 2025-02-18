<?php

    if(isset($_POST['nome'])){ //checa se a variavel existe
        $arquivo = fopen("dados.txt", "a");
        fwrite($arquivo, "nome: " . $_POST['nome'] . "\n");
        fclose($arquivo);
        echo "<h1>" . $_POST['nome'] . "</h1>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<!-- Muda a cor da página quando clica em cadastrar-->
<body style="background-color: <?php if(isset($_POST["nome"])){ echo '#CCCCCC'; }else{ echo '#f3f3f3'; } ?>">
    <form name="dados_pessoa" method="POST" action="">
        Nome:<input type="text" name="nome" id="nome">
        <br>
        <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">

    </form>
    
</body>
</html>