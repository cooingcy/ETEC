<?php
session_start();
include_once('config.php');

if (isset($_POST['clientes'])) {
    $ids = $_POST['clientes'];

    foreach ($ids as $id) {
        // Aqui você pode adicionar a lógica para excluir o registro com o ID correspondente
        // Exemplo:
        $query = "DELETE FROM clientes WHERE id = $id";
        mysqli_query($con, $query);
    }

    // Exibindo mensagem de sucesso
    echo "Registros excluídos com sucesso.";
} else {
    // Se nenhum registro for selecionado
    echo "Selecione um usuário para excluir.";
}
?>

