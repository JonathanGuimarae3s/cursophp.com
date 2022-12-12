<?php
//CONEXÃO incluindo o arquivo db_connect na index 
require_once 'db_connect.php';
// sessao
session_start();

if (isset($_POST["btn-entrar"])) :
    $erros = array();
    // pegando os dados dos input.Usando uma função para filtrar os dados 
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    if (empty($login) or empty($senha)) :
        // se senha ou login estiver vazio ele atribuirá esse elemento ao array
        $erros[] = "<li>Login/senha precisa ser preenchido!</li>";
    else :
        // Atribuindo  um comando sql na varivel . to verificando se o login é igual o login do banco de dados
        $sql = "SELECT login FROM user WHERE login ='$login'";
        // vendo o resultado que a consulta SQL me retornou. MYSQLIQUERY(CONEXAO COM O DB , COMANDO SQL) retorna um valor booleano
        $resultado = mysqli_query($connect, $sql);
        // verificando se o numero de linha é superior a 0 
        if (mysqli_num_rows($resultado) > 0) :
            // criptografando a senha 
            $senha = md5($senha);
            // Atribuindo  um comando sql na varivel . toselecionando todos os dados da tabela user onde o login e a senha for iguais ao que o usuario enviou
            $sql = "SELECT *FROM user WHERE login ='$login' AND senha= '$senha'";

            $resultado = mysqli_query($connect, $sql);
            if (mysqli_num_rows($resultado) == 1) :
                // pegando os dados e pondo como array
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);//fechando a conexao
                $_SESSION['logado'] = true;//atribuindo a variavel global session o indice logado de valor true
                $_SESSION['id_usuario'] = $dados['id'];//atribuindo a variavel global session o indice id_usuario a id do user
                header('Location: home.php');//redirecionando para pagina home

            else :
                $erros[] = "<li> Usuario e senha nao conferem</li>";
            endif;
        else :
            $erros[] = "<li>Usuario inexistente</li>";
        endif;
    endif;
endif;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    if (!empty($erros)) :
        // se a variavel erro nao estiver vazia ela sera mostrado para o usuario
        foreach ($erros as $erro) :
            echo $erro;
        endforeach;
    endif;
    ?>
    <hr>
    <form action="" method="POST">
        Login: <input type="text" name="login" id=""><br>
        Senha <input type="password" name="senha" id="">
        <br>
        <button type="submit" name="btn-entrar">Entrar</button>
    </form>
</body>

</html>