<?php
    $idc = $_GET['idc'];
    $alt = $_GET['alt'];

    include "banco.php";
    if($alt == 'menos'){
        $query = "update carrinho set qtd = qtd - 1 where idcarrinho = $idc";
    }else{
        $query = "update carrinho set qtd = qtd + 1 where idcarrinho = $idc";
    }
    mysqli_query($con, $query);
    header("Location: carrinho.php");
?>