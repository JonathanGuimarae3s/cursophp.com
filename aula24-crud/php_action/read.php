<?php

$sql = "SELECT *FROM cliente";
$resultado = mysqli_query($connect, $sql);


while ($dados = mysqli_fetch_array($resultado)) {
    echo "
    <tr> 
        <td>$dados[nome]</td>
        <td>$dados[sobrenome]</td>
        <td>$dados[email]</td>
        <td>$dados[idade]</td>
        <td >
        
        <a href='./pages/edit.php?id=$dados[id]'><button class='btn btn-outline-success edit'><i class='bi bi-pencil-fill'> Editar</i></button></a>
        <button class='btn btn-outline-danger remove' data-bs-toggle='modal' data-bs-target='#exampleModal$dados[id]'><i class='bi bi-trash'> Deletar</i></button>
        </td>


        <div class='modal fade '  id='exampleModal$dados[id]' tabindex='-1'aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog '>
          <div class='modal-content '>
            <div class='modal-header'>
              <h1 class='modal-title fs-5' id='exampleModalLabel'>
              <i class='bi bi-exclamation-triangle-fill text-warning'></i>
              <span>Área de perigo</span>
              <i class='bi bi-exclamation-triangle-fill text-warning'></i>
              </h1>
              <button
                type='button'
                class='btn-close'
                data-bs-dismiss='modal'
                aria-label='Close'
              ></button>
            </div>
            <div class='modal-body'>Tem certeza que você quer deletar esse registro ??</div>
            <div class='modal-footer'>
              <form action='php_action/delete.php' method ='POST'>
                <input type='hidden' name='id' value='$dados[id]'>
                  
                  <button name='deletar' type='submit'  class='btn btn-outline-danger'  >
                Sim, quero deletar!
                  </button>
              </form>
              <button type='button' data-bs-dismiss='modal' class='btn btn-outline-primary'>
               Cancelar
              </button>
            </div>
          </div>
        </div>
      </div>
                             
    </tr>";
}
