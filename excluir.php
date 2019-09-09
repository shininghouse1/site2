<?php 
	include "banco.php";
	$idc = $_GET['idc'];
	$query = "delete from carrinho where idcarrinho = $idc";
	mysqli_query($con, $query);
	header("Location: carrinho.php");
?>
