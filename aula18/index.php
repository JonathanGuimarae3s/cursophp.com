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

    // sanitize
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if (!filter_var($idade, FILTER_VALIDATE_INT)) :
        $erros[] = 'idade precisa ser um inteiro';
    endif;
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $erros[] = 'email invalido';
    endif;
    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if (!filter_var($url, FILTER_VALIDATE_URL)) :
        $erros[] = 'url invalida';
    endif;
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
        url: <input type="text" name="url" id=""><br>
        <button type="submit" name="enviar-formulario">enviar</button>
    </form>


</body>

</html>