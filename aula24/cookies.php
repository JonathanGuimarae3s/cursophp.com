
<?php
// criando 
setcookie('user', 'Joao da silva', time() + 3600);
// apagando
setcookie('user', 'Joao da silva', time() - 3600);
var_dump($_COOKIE);

?>