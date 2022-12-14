<?php

require_once 'db_connect.php';
if (isset($_POST['add-register'])) :
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastName = mysqli_escape_string($connect, $_POST['lastName']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $sql = "INSERT INTO cliente (nome,sobrenome,email,idade) VALUES ('$name','$lastName','$email','$idade');";

    if (mysqli_query($connect, $sql)) :
        header('Location:../index.php?success');
    else :
        header('Location:../index.php?failed');
    endif;

endif;
