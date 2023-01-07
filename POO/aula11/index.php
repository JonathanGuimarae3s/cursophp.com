<?php
// exceções sao ocorrencias anomais que afetam
// o funcionamento da app
// exception é a classe base para todas as execeptions
// mmessage,code,file,line

class newsLetter
{

    public function cadastrarEmai($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
            throw new Exception("Esse email é invalido", 1);
        else :
            echo "email cadastrado com sucesso";

        endif;
    }
}
$newLetter = new newsLetter();

try {

    $newLetter->cadastrarEmai("jj@");
} catch (
    Exception $e
) {
    echo $e->getMessage();
}
