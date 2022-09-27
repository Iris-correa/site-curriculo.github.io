
<?php

$nome = $_POST['pesq'] ?? null; // variavel que vai pesquisar o curriculo


if (file_exists("$nome.txt")){ //se arquivo existir

    echo file_get_contents("$nome.txt"); // printa o txt
} 
else { //senão:

    echo "<h1 id='titulo_localizar'>⚠️ Não foi possível localizar este currículo 🔍</h1> <br>";
    echo "<a class='link_exe' href='index.php'>Cadastrar novo currículo</a>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <!-- Adicionando conf da pág -- CSS e title -->
<head>
    <meta charset="UTF-8">
    <title>Localizar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="midias/favicon.ico" type="image/x-icon">
</head>
    