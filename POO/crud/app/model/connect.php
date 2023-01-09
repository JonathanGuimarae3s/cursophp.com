<?php

// aqui sera a classe responsavel por fazer a conexão com o DB
/**
 * Padrao singleton: nossa aplicação tera uma instância da conexao com o db 
 *  deixando-a  mais rapida
 */
class Connect
{


    private static $instace;
    public static function getConnect()
    {
        // verifica se tem uma instancia da conexao
        if (!isset(self::$instace)) {
            self::$instace = new PDO('mysql:host=localhost;dbname=pdo;charset=utf-8', 'root', '');
        } else {
            return self::$instace;
        }
    }
}
