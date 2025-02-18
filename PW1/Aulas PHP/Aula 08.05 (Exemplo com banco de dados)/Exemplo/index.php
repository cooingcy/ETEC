<?php

define( 'MYSQL_HOST', 'localhost:3306' );
define( 'MYSQL_USER', 'root' );
define( 'MYSQL_PASSWORD', '' );
define( 'MYSQL_DB_NAME', 'bd_sistema' );

try{
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
}catch( PDOExceptio $e ){
    echo 'Erro ao conectar com MySQL: ' . $e->getMessage();
}

/*$con = mysql_connect("localhost","root","") or die ("Erro de Conexão");
mysql_select_db("clientes",$con);*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sistema de Acesso ao Banco de Dados</title>
</head>
<body>
    <?php

        $sql = "SELECT * FROM clientes";
        $result = $PDO->query( $sql );
        $rows = $result->fetchAll();

        /*print_r( $rows[0]['nome'] ); echo "<br>";
        print_r( $rows[0]['endereco'] ); echo "<br>";
        print_r( $rows[0]['bairro'] ); echo "<br>";
        print_r( $rows[0]['cep'] ); echo "<br>";
        print_r( $rows[0]['cidade'] ); echo "<br>";
        print_r( $rows[0]['estado'] ); echo "<br>";*/

        for($i=0; $i < count($rows); $i++){ ?>
            Nome: <?php echo $rows[$i]['nome']; ?><br>
            Endereço: <?php echo $rows[$i]['endereco']; ?><br>
            Bairro: <?php echo $rows[$i]['bairro']; ?><br>
            Cep: <?php echo $rows[$i]['cep']; ?><br>
            Cidade: <?php echo $rows[$i]['cidade']; ?><br>
            Estado: <?php echo $rows[$i]['estado']; ?><br><br>

        <?php
        }
    ?>

</body>
</html>