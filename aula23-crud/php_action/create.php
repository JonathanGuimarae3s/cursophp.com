<?php

// conexao
require_once 'db_connect.php';
function clear($input)
{
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}
session_start();
if (isset($_POST['add-register'])) :
    $name = clear($_POST['name']);
    $lastName = clear($_POST['lastName']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);
    $cargo = $_POST['cargo'];
    // "INSERT INTO cliente (nome,sobrenome,email,idade) VALUES ('$name','$lastName','$email','$idade');";

    $sql = "INSERT INTO funcionario(nome,sobrenome,email,idade,cargo) VALUES ('$name','$lastName','$email','$idade','$cargo');";

    if (mysqli_query($connect, $sql)) :
        $_SESSION['mensagem'] = "funcionario cadastrado com sucesso! <i class='bi bi-emoji-smile'></i>";

        header('Location:../index.php?success');
    else :
        $_SESSION['mensagem'] = "Houve um erro  ao cadastrar!";

        header('Location:../index.php?failed');
    endif;

endif;
