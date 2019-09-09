<?php 
	if(empty($_COOKIE['email'])){
		header("Location: index.php");
	}else{
		$email = $_COOKIE['email'];
		include "banco.php";
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "insert into carrinho(email, idproduto, qtd) values ('$email', '$id', 1)";
			mysqli_query($con, $query);
			header("Location: carrinho.php");
		}
	}
	include "anterior.php";
	$query = "select * from carrinho where email = '$email'";
	$exec = mysqli_query($con, $query);
	$total = mysqli_num_rows($exec);
	echo "<h1>Carrinho</h1>";
	if($total == 0){
		echo "<p>No momento, não existem produtos no seu carrinho!</p>";
	}else{
		echo "<table class='table table-striped'>
				<tr>
					<th>Foto</th>
					<th>Título</th>
					<th>Preço Un</th>
					<th>Qtd</th>
					<th>Preço Item</th>
					<th>Excluir</th>
				</tr>";
		$vt = 0;
		while($carrinho = mysqli_fetch_array($exec)){
			$idproduto = $carrinho['idproduto'];
			$idcarrinho = $carrinho['idcarrinho'];
			$qtd = $carrinho['qtd'];			$query2 = "select * from produto where idproduto = $idproduto limit 1";
			$exec2 = mysqli_query($con, $query2);
			if($prod = mysqli_fetch_array($exec2)){
				$foto = $prod['imagem'];
				$preco = $prod['preco'];
				$titulo = $prod['titulo'];
				$item = $preco * $qtd;
				$vt = $vt + $item;
				$preco = number_format($preco, 2, ',','.');
				$item = number_format($item, 2, ',','.');
				echo "<tr>
						<td><img src='produtos/$foto' width='50px'></td>
						<td>$titulo</td>
						<td>R$ $preco</td>
						<td>";
						if($qtd == 1){
							echo "<a href='excluir.php?idc=$idcarrinho' class='btn btn-danger btn-sm'>-</a>";
						}else{
							echo "<a href='alterar.php?idc=$idcarrinho&alt=menos' class='btn btn-danger btn-sm'>-</a>";
						}
						echo " $qtd <a href='alterar.php?idc=$idcarrinho&alt=mais' class='btn btn-danger btn-sm'>+</a></td>
						<td>R$ $item</td>
						<td><a href='excluir.php?idc=$idcarrinho' class='btn btn-danger btn-sm'>X</a></td>
					</tr>";
			}
		}
		$vt = number_format($vt, 2, ',','.');
		echo "</table><h4>Valor Total: R$ $vt</h4>";
	}

?>