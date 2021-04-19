<?php

    session_start();

    $arquivo = fopen('../../../xampp/help_desk/arquivo.hd','a');

    $texto = $_SESSION['id']. '-' . $_POST['titulo'] .'-'. $_POST['categoria'] . '-' . $_POST['descricao'] . PHP_EOL;

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php')
?>