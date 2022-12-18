<?php

$sql = "SELECT *FROM cliente";
$resultado = mysqli_query($connect, $sql);


while ($array = mysqli_fetch_array($resultado)) {
    echo "
    <tr> 
        <td>$array[nome]</td>
        <td>$array[sobrenome]</td>
        <td>$array[email]</td>
        <td>$array[idade]</td>
        <td >
        <div class='btn btn-group'><button class='btn btn-outline-success edit'><i class='bi bi-pencil-fill'> Editar</i></button>
        <button class='btn btn-outline-danger remove'><i class='bi bi-trash'> Deletar</i></button></div>
        </td>
   
                             
    </tr>";
}
