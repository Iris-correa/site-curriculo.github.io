<?php

$nome = $_POST['delet'] ?? null;
$curriculo = "$nome.txt";

if (file_exists($curriculo)){ //se arquivo existir
    
    $resultado = unlink($curriculo); // excluir com o comando unlink - Apaga o arquivo filename. 
    echo "<h1 id='titulo_deletar'>Currículo deletado com sucesso!</h1> <br>";
    echo "<a class='link_exe' href='index.php'>Cadastrar novo currículo</a>";

}
    else { 
    //senão:
    echo "<h1 id='titulo_deletar'>⚠️ Não foi possível Deletar este currículo 🗑</h1> <br>";
    echo "<p id='del'>Pois o currículo de <strong>$nome</strong> não existe!</p> <br>";
    echo "<a class='link_exe' href='index.php'>Cadastrar novo currículo</a>";
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
    <!-- Adicionando conf da pág -- CSS e title -->
<head>
    <meta charset="UTF-8">
    <title>Erro ao deletar</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="midias/favicon.ico" type="image/x-icon">
</head>

