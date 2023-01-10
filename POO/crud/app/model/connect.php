<?php
namespace App\model;



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
        $serverName = 'localhost'; //localhost
        $userName = "root";
        $password = "";
        $dbName = "pdo";
        // verifica se tem uma instancia da conexao
        if (!isset(self::$instace)) {

            self::$instace = new \PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
            self::$instace->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        return self::$instace;

    }
}