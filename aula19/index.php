<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
// verificando se existe esse indice(enviar-formulario) na super global pos
if (isset($_POST['enviar-formulario'])) :
    // setando os formatos permitidos
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $quantidadeArquivos = count($_FILES['arquivos']['name']);
    $contador = 0;
    while ($contador < $quantidadeArquivos) :
        //verificando se a extensao é valida com a função pathinfo 

        $extensao = pathinfo($_FILES['arquivos']['name'][$contador], PATHINFO_EXTENSION);
        // verificnado se o valor da extensao existe no array formatosPermitidos com in_array (valor a ser procurado, array que que sera feita a busca)
        if (in_array($extensao, $formatosPermitidos)) :
            // add o caminho da img
            $pasta = "arquivos/";
            // pegando o caminho do arquivo
            $temporario = $_FILES['arquivos']['tmp_name'][$contador];

            $novoNome = uniqid() . ".$extensao";
            // verificando se houve realmente o upload. move_uploaded_file(arquivo a ser movido, pasta em que contera o arquivo movido)
            if (move_uploaded_file($temporario, $pasta . $novoNome)) :
                // se for vdd mostra a mensagem
                echo "upload feito com sucesso";

            else :
                echo "Nao foi possivel fazer o upload";
            endif;

        else :
            echo "$extensao é formato invalido";
        endif;
        $contador++;
    endwhile;
endif;

?>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <!-- enctype serve para definir o tipo de codificação com que os dados serao enviados -->
        <input type="file" name='arquivos[]' multiple><br>
        <input type="submit" name="enviar-formulario">
    </form>
</body>

</html>