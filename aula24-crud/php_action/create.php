<?php

// conexao
require_once 'db_connect.php';
session_start();
if (isset($_POST['add-register'])) :
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastName = mysqli_escape_string($connect, $_POST['lastName']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $sql = "INSERT INTO cliente (nome,sobrenome,email,idade) VALUES ('$name','$lastName','$email','$idade');";

    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "Cliente cadastrado com sucesso! <i class='bi bi-emoji-smile'></i>";

        header('Location:../index.php?success');
    else :
        $_SESSION['mensagem'] = "Houve um erro  ao cadastrar!";

        header('Location:../index.php?failed');
    endif;

endif;
