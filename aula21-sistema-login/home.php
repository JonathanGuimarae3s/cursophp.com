<?php
require_once 'db_connect.php';
// sessao
session_start();
// verificação
// se nao existir essa varivel global o user é redirecionado para pagina index
if (!isset($_SESSION['logado'])) : header('Location: index.php');
endif;
//dados do user
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM user WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charseet="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restrita</title>
</head>

<body>
    <h1>Olá <?php echo $dados['nome'];
    ?></h1>
    <a href="logout.php">Sair</a>
</body>

</html>