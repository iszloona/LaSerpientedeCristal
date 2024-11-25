<?php

function excluir_cliente($conexao, $id_cliente){
    $sql= "delete from cliente where id_cliente= $id_cliente";
    return mysqli_query($conexao, $sql);
}


    
