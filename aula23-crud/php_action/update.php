<?php

// conexao
require_once 'db_connect.php';
session_start();
if (isset($_POST['editar'])) :
    $id = mysqli_escape_string($connect, $_POST['id']);

    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastName = mysqli_escape_string($connect, $_POST['lastName']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $cargo = mysqli_escape_string($connect, $_POST['cargo']);

    $sql = "UPDATE funcionario SET nome = '$name' , sobrenome = '$lastName', email='$email',idade = '$idade',cargo='$cargo' WHERE id = '$id';";

    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "funcionario atualizado com sucesso! <i class='bi bi-emoji-smile'></i>";

        header('Location:../index.php?success');
    else :
        $_SESSION['mensagem'] = "Erro ao atualizar!";

        header('Location:../index.php?failed');
    endif;

endif;
