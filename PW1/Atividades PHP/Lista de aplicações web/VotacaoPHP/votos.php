<?php
session_start();

$votos = isset($_SESSION['votos']) ? $_SESSION['votos'] : [
    1 => ['nome' => 'Opção 1', 'voto' => 0],
    2 => ['nome' => 'Opção 2', 'voto' => 0],
    3 => ['nome' => 'Opção 3', 'voto' => 0],
];

function lerVotos() {
    global $votos;
    $arquivo = fopen("Dados_votos.txt", "r");
    if ($arquivo) {
        while (($linha = fgets($arquivo)) !== false) {
            $voto = trim($linha);
            if (isset($votos[$voto])) {
                $votos[$voto]['voto']++;
            }
        }
        fclose($arquivo);
    }
}

function imprimeVoto() {
    global $votos;
    $arquivo = fopen("Dados_votos.txt", "w");
    if ($arquivo) {
        foreach ($votos as $item) {
            $opc = $item['nome'];
            $texto = "$opc\n";
            for ($v = 0; $v < $item['voto']; $v++) {
                fwrite($arquivo, $texto) == false;
            }
        }
        fclose($arquivo);
    }
}

if (file_exists("Dados_votos.txt")) {
    lerVotos();
    $_SESSION['votos'] = $votos;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['op'])) {
        $escolha = $_POST['op'];
        if (isset($votos[$escolha])) {
            $votos[$escolha]['voto']++;
            $_SESSION['votos'] = $votos;
            imprimeVoto();
        }
    }
}

foreach ($votos as $item) {
    echo $item['nome'] . ': ' . $item['voto'] . '<br>';
}
?>
<br>
<form action="index.php" method="post">
  <input type="submit" value="Vote novamente!" style="background-color: #1E90FF; width: 130px; height: 30px;"/>
</form>