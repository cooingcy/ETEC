<?php
    // Define as constantes de configuração para a conexão com o banco de dados
    define( 'MYSQL_HOST', 'localhost:3306' );
    define( 'MYSQL_USER', 'root' );
    define( 'MYSQL_PASSWORD', '' );
    define( 'MYSQL_DB_NAME', 'bd_sistema' );

//O try e catch são blocos de código usados para lidar com exceções em PHP.
try{

    // Cria uma nova instância da classe PDO para estabelecer a conexão com o banco de dados MySQL
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

}catch( PDOException $e ){
    
    // Em caso de erro na conexão, exibe a mensagem de erro
    echo 'Erro ao conectar com MySQL: ' . $e->getMessage();
}

/*$con = mysql_connect("localhost","root","") or die ("Erro de Conexão");
mysql_select_db("clientes",$con);*/

    // Define a consulta SQL para selecionar todos os registros da tabela "clientes"
    $sql = "SELECT * FROM clientes";
    
    // Executa a consulta e obtém o resultado
    $result = $PDO->query( $sql );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Define a configuração de visualização para dispositivos móveis, 
    ajustando a largura para o tamanho do dispositivo e escalando a página para uma visualização inicial de 1:1. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Define o título -->
    <title>PHP - Sistema de Acesso ao Banco de Dados com Bootstrap!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        Define regras de estilo que serão aplicadas somente quando a 
        largura da tela for menor ou igual a 767 pixels. Nesse caso,
        a classe ".mobile-table td:nth-child(n+2):not(:last-child)" 
        terá a propriedade `display` definida como `none`, ocultando 
        as células da tabela a partir da segunda coluna, exceto a última coluna.
        @media (max-width: 767px) {
            .mobile-table td:nth-child(n+2):not(:last-child) {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">💠</th>

                    <!-- A classe "d-none" define que o elemento será ocultado em 
                    todos os tamanhos de tela, enquanto a classe "d-md-table-cell" define 
                    que o elemento será exibido como célula de tabela apenas em dispositivos 
                    de tamanho médio e maiores -->
                    <th scope="col" class="d-none d-md-table-cell">Nome</th>
                    <th scope="col" class="d-none d-md-table-cell">Endereço</th>
                    <th scope="col" class="d-none d-md-table-cell">Bairro</th>
                    <th scope="col" class="d-none d-md-table-cell">Cep</th>
                    <th scope="col" class="d-none d-md-table-cell">Cidade</th>
                    <th scope="col" class="d-none d-md-table-cell">Estado</th>
                </tr>
            </thead>
            <tbody>

                <!-- Loop PHP que percorre cada linha de resultados 
                retornados pela consulta SQL. O código dentro deste loop será repetido para cada linha de dados. -->
                <?php while ($row = $result->fetch()) { ?>
                    <tr>
                        <th scope="row">1</th>

                        <!--  Célula de dados da tabela com o valor do campo 'nome' da linha atual. 
                        A classe "d-none" oculta o elemento em todos os tamanhos de tela, enquanto 
                        a classe "d-md-table-cell" define que o elemento será exibido como célula de tabela 
                        apenas em dispositivos de tamanho médio e maiores. E assim por diante. -->
                        <td class="d-none d-md-table-cell"><?php echo $row['nome']; ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $row['endereco']; ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $row['bairro']; ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $row['cep']; ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $row['cidade']; ?></td>
                        <td class="d-none d-md-table-cell"><?php echo $row['estado']; ?></td>
                    </tr>

                    <!-- Início de uma nova linha de dados específica para dispositivos de tela pequena. 
                    A classe "d-table-row" define que a linha será exibida como uma linha de tabela, 
                    e a classe "d-md-none" define que a linha será ocultada em dispositivos de tamanho médio e maiores. -->
                    <tr class="d-table-row d-md-none">
                        <td></td> <!-- Célula vazia para manter a estrutura da tabela. -->
                        <td colspan="6"> <!-- Célula de dados que se estende por 6 colunas. -->
                            <strong>Nome:</strong> <?php echo $row['nome']; ?><br>
                            <strong>Endereço:</strong> <?php echo $row['endereco']; ?><br>
                            <strong>Bairro:</strong> <?php echo $row['bairro']; ?><br>
                            <strong>Cep:</strong> <?php echo $row['cep']; ?><br>
                            <strong>Cidade:</strong> <?php echo $row['cidade']; ?><br>
                            <strong>Estado:</strong> <?php echo $row['estado']; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
