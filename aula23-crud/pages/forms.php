<?php

include_once '../includes/header.php'; ?>


<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1>Cadastro de funcionário
            </h1>
            <form action="../php_action/create.php" method="POST">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                    <label for="name">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="">
                    <label for="lastName">Sobrenome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="idade" id="idade" placeholder="">
                    <label for="idade">Idade</label>
                </div>
                <div class="mb-3">
                    <label for="cargo" class="form-label">Cargo</label>
                    <select class="form-select form-select-lg" name="cargo" id="cargo">
                        <option selected>teste</option>
                        <option value="">tesste</option>

                    </select>
                </div>
                
                <input type="submit" name="add-register" class=" btn btn-success" value="Adicionar Cliente">
                <a href="../index.php" class="btn btn-outline-primary">Listar funcionário</a>
            </form>



        </div>
    </div>
</div>
<?php

include_once '../includes/header.php'; ?>