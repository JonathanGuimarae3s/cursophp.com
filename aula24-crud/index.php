<?php

// conexao 
include 'php_action/db_connect.php';
// header
include_once 'includes/header.php';
// mensagem
include_once 'includes/message.php'; ?>
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
                <div role='alert' aria-live='assertive' aria-atomic='true' class='toast' data-bs-autohide='false'>
                    <div class='toast-header'>
                        <img src='...' class='rounded me-2' alt='...'>
                        <strong class='me-auto'>Bootstrap</strong>
                        <small>11 mins ago</small>
                        <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                    </div>
                    <div class='toast-body'>
                        <?php echo ($_SESSION['$mensagem']); ?>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
<?php

include_once 'includes/footer.php'; ?>.