<?php

include_once 'includes/header.php'; ?>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1>Clientes</h1>
            <a href="pages/forms.php" class="btn btn-success my-3">Adicionar Cliente</a>
            <div class="table-responsive">

                <table class="table table-dark table-striped">

                    <thead>
                        <tr>
                            <th scope="col">nome</th>
                            <th scope="col">sobrenome</th>
                            <th scope="col">email</th>
                            <th scope="col"> idade</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">Jonathan</td>
                            <td>Guimaraes</td>
                            <td>Jonathan@gmail.com</td>
                            <td>20</td>
                            <td><button class="btn btn-danger remove"><i class="bi bi-trash"></i></button></td>
                            <td><button class="btn btn-success edit"><i class="bi bi-pencil-fill"></i></button></td>

                        </tr>

                    </tbody>
                </table>
            </div>


        </div>

    </div>
</div>
<?php

include_once 'includes/header.php'; ?>.