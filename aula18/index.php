<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_POST['enviar-formulario'])) {
    // array de erros
    $erros = array();
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $ip = $_POST['ip'];

    $url = $_POST['url'];
    // validações
    if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
        $erros[] = "Idade precisa ser um inteiro";
    }
    if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $erros[] = "email invalido";
    }
    if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
        $erros[] = "peso precisar ser um numero racional";
    }
    if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
        $erros[] = "ip invalido";
    }
    if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
        $erros[] = "url invalida";
    }
    // mensagens de erro 
    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "<li> $erro </li>";
        }
    } else {
        echo "sem erros";
    }
}
?>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">


        nome: <input type="text" name="nome" id=""><br>
        idade: <input type="text" name="idade" id=""><br>
        email: <input type="email" name="email" id=""><br>
        Peso: <input type="text" name="Peso" id=""><br>
        ip: <input type="text" name="ip" id=""><br>
        url: <input type="text" name="url" id=""><br>
        <button type="submit" name="enviar-formulario">enviar</button>
    </form>


</body>

</html>