<?php
include_once '../php_action/db_connect.php';
include_once '../includes/header.php';

if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM cliente  WHERE id ='$id'";
    $resultado  = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif; ?>


<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1>Editar cliente</h1>
            <form action="../php_action/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo ($dados['id']); ?>">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo ($dados['nome']); ?>">
                    <label for="name">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo ($dados['sobrenome']); ?>">
                    <label for="lastName">Sobrenome</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo ($dados['email']); ?>">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="idade" id="idade" value="<?php echo ($dados['idade']); ?>">
                    <label for="idade">Idade</label>
                </div>
                <input type="submit" name="editar" class=" btn btn-success" value="Atualizar Cliente">
                <a href="../index.php" class="btn btn-outline-primary">Listar Clientes</a>
            </form>



        </div>
    </div>
</div>
<?php
include_once '../includes/header.php'; ?>