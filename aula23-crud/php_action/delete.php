<?php

// conexao
require_once 'db_connect.php';
session_start();
if (isset($_POST['deletar'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM funcionario WHERE id = '$id';";

    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Cliente deletado  com sucesso! <i class='bi bi-emoji-smile'></i>";

        header('Location:../index.php?success');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar!";

        header('Location:../index.php?failed');
    endif;

endif;
