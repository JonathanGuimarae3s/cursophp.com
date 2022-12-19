<?php

// conexao 
include 'php_action/db_connect.php';
// header
include_once 'includes/header.php';
// mensagem
include_once 'includes/message.php'
?>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1>Clientes</h1>
            <a href="pages/forms.php" class="btn btn-success my-3">Adicionar Cliente</a>
            <div class="table-responsive">

                <table class="table table-secondary table-hover table-striped">

                    <thead>
                        <tr>
                            <th scope="col">nome</th>
                            <th scope="col">sobrenome</th>
                            <th scope="col">email</th>
                            <th scope="col"> idade</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody><?php
                            include_once 'php_action/read.php';
                            ?>


                    </tbody>
                </table>

            </div>



        </div>

       
    </div>
</div>
<?php

include_once 'includes/footer.php'; ?>.