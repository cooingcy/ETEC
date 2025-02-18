<?php
// Criar um cookie
$nome_cookie = "usuario";
$cookie_valor = "Matheus";
setcookie($nome_cookie, $cookie_valor, time() + (3600), "/");
?>
<html>
<body>

<?php
//Modificar um Cookie
if(isset($_COOKIE[$nome_cookie])) {
    $nomeUsuario = $_COOKIE["$nome_cookie"];
    echo "Bem-vindo, $nomeUsuario!<br>";
} else {
    echo "Bem-vindo pela primeira vez!<br>";
}

// Excluir um cookie
if (isset($_COOKIE[$nome_cookie])) {
    // Define o cookie para expirar no passado (tempo negativo)
    setcookie($nome_cookie, "", time() - 3600, "/");
    
    // Verifique se o cookie foi excluído
    $cookieExcluido = !isset($_COOKIE[$nome_cookie]);
    echo $cookieExcluido ? "<br>O cookie foi excluído com sucesso!" : "<br>Falha ao excluir o cookie.";
}
?>

</body>
</html>
