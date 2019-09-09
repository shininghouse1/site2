<?php 
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$senha = md5($senha);

	include "banco.php";

	$query = "select * from usuario where email = '$email' and senha ='$senha' limit 1";
	$exec = mysqli_query($con, $query);
	$total = mysqli_num_rows($exec);

	if($total == 1){
		if($u = mysqli_fetch_assoc($exec)){
			$nome = $u['nome'];
			$nivel = $u['nivel'];
			setcookie("email", $email, time()+60*60);
			setcookie("nome", $nome, time()+60*60);
			setcookie("nivel", $nivel, time()+60*60);
			header("Location: perfil.php");
		}
	}else{
		include "anterior.php";

		header("Location: cadastrar.php");
		echo "<p>Usuário ou senha inválida, tente fazer login ou cadastrar-se em nosso site</p>";

		include "posterior.php";
	}
