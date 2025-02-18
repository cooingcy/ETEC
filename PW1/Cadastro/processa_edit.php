<?php
session_start();
ob_start();

include_once('config.php');

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);

if (!empty($dados['cadastrar'])) {

    foreach ($dados['id'] as $chave => $id) {
        /*echo "Chave: $chave <br>";
        echo "ID: " . $dados['id'][$chave] . "<br>";
        echo "Nome: " . $dados['nome'][$chave] . "<br>";
        echo "Endereço: " . $dados['endereco'][$chave] . "<br>";
        echo "Bairro: " . $dados['bairro'][$chave] . "<br>";
        echo "Cep: " . $dados['cep'][$chave] . "<br>";
        echo "Cidade: " . $dados['cidade'][$chave] . "<br>";
        echo "Estado: " . $dados['estado'][$chave] . "<br>";
        echo "<hr>";*/

        $querry_usuario = "UPDATE clientes SET nome=?, endereco=?, bairro=?, cep=?, cidade=?, estado=? WHERE id=?";
        $edit_u = $con->prepare($querry_usuario);
        $edit_u->bind_param('ssssssi', $nome, $endereco, $bairro, $cep, $cidade, $estado, $id);

        foreach ($dados['id'] as $chave => $id) {
            $nome = $dados['nome'][$chave];
            $endereco = $dados['endereco'][$chave];
            $bairro = $dados['bairro'][$chave];
            $cep = $dados['cep'][$chave];
            $cidade = $dados['cidade'][$chave];
            $estado = $dados['estado'][$chave];

            $edit_u->execute();
        }

    }
    $_SESSION['msg'] = "<p>Usuário editado com sucesso!</p>";

    header("Location: consulta.php");

} else {
    $_SESSION['msg'] = "<p> Erro, Usuário não editado com sucesso, 
    tente novamente!</p>";

    header("Location: consulta.php");
}

?>