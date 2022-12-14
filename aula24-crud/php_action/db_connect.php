<?php
// conexao com o banco de dados
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($severname, $username, $password, $db_name);

if (mysqli_connect_error()) :


    echo "[ERROR]" . mysqli_connect_error();
endif;
