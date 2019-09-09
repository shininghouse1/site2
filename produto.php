<?php 
	if(empty($_GET['id'])){
		header("Location: index.php");
	}
	$id = $_GET['id'];
	include "banco.php";
	$query = "select * from produto where idproduto = $id";
	$exec = mysqli_query($con, $query);

	while($p = mysqli_fetch_array($exec)){
		$titulo = $p['titulo'];
		$preco = $p['preco'];
		$preco = number_format($preco, 2, ',','.');
		$imagem = $p['imagem'];
		$descricao = $p['descricao'];
		$categoria = $p['categoria'];
	}

	include "anterior.php";

?>
	<div class="card mt-5 mb-5">
		<div class="card-header bg-primary text-white">
			<h1><?=$titulo?></h1>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<img src="produtos/<?=$imagem?>" style="width:100%">
				</div>
				<div class="col-xs-12 col-md-8">
					<h5>Descrição: <?=$descricao?></h5>
					<h5>Categoria: <?=$categoria?></h5>
					<h5>Preço: R$ <?=$preco?></h5>

				</div>
				
			</div>
			
		</div>
		<div class="card-footer">
					<a href='carrinho.php?id=$id' class='btn btn-outline-danger'>
										Adicionar ao Carrinho
									</a>
			</div>
	</div>
<?php 
	include "posterior.php";
?>