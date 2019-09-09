<?php 
	$nome = strip_tags($_POST['nome']);
	$email = strip_tags($_POST['email']);
	$senha = strip_tags($_POST['senha']);
	$endereco = strip_tags($_POST['endereco']);
	$bairro = strip_tags($_POST['bairro']);
	$cidade = strip_tags($_POST['cidade']);
	$estado = strip_tags($_POST['estado']);
	$senha = md5($senha);

	include "banco.php";
	$query = "insert into usuario(nome, email, senha, endereco, bairro, cidade, estado, nivel) values ('$nome', '$email', '$senha', '$endereco', '$bairro', '$cidade', '$estado', 1)";

	mysqli_query($con, $query);

	setcookie("nome", $nome, time()+60*60);
	setcookie("email", $email, time()+60*60);
	setcookie("nivel", "1", time()+60*60);

	header("Location: perfil.php");

?>