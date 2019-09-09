<?php 
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$categoria = $_POST['categoria'];
	$imagem = microtime();

	include "upload.php";


	include "banco.php";
	$query = "insert into produto(titulo, descricao, preco, totalavaliacao, somaavaliacao, imagem, categoria) values ('$titulo', '$descricao', '$preco', 0,0, '$imagem', '$categoria')";
	mysqli_query($con, $query);
	header("Refresh: 5, cadprod.php");
	include "anterior.php";
	echo "Produto cadastrado com sucesso!";
	include "posterior.php";
?>