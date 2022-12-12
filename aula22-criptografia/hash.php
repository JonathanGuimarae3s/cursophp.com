<?php

$senha = "12345";
$senhadb = '$2y$10$KkqP.qirlMa1qXKMDn8YTuLZjBN70MeOOLKkmztjTzUClH.yuOnXu';
if (password_verify($senha, $senhadb)) :
    echo "senha valida";
else : echo "senha invalida";
endif;
