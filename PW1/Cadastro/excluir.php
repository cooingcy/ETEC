<?php
session_start();
include_once('config.php');

if (isset($_POST['clientes'])) {
    $ids = $_POST['clientes'];

    foreach ($ids as $id) {
        // Aqui você pode adicionar a lógica para excluir o registro com o ID correspondente
        $query = "DELETE FROM clientes WHERE id = $id";
        mysqli_query($con, $query);
    }

    // Exibindo mensagem de sucesso
    $_SESSION['msg'] = "<p>Registros excluídos com sucesso!</p>";
    header("Location: consulta.php");
} else {
    // Se nenhum registro for selecionado
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert' style='width: 300px;'>
                        Selecione um registro para excluir!
                        </div>";
    
    header("Location: consulta.php");
}
?>