<?php
class Login
{
    /*
     CLASS STATIC NAO PRECISA CHAMAR A CLASS,mas nao significa  que os 
     os metodos ou  as class nao podem ser estânciadas

     */
    public static $user;
    public static function loginVerify()
    {
        echo "voce," . self::$user . ",esta logado";
    }
}
Login::$user = "admin";
Login::loginverify();
