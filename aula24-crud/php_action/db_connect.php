<?php
// conexao com o banco de dados
$severname = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($severname, $username, $password, $db_name);
mysqli_set_charset($connect, "utf-8");
if (mysqli_connect_error()) :


    echo "[ERROR]" . mysqli_connect_error();
endif;
