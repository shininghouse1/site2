<?php 
	if(empty($_COOKIE['nivel'])){
		header("Location: index.php");
	}
	$nivel = $_COOKIE['nivel'];
	if($nivel == 1){
		header("Location: perfil.php");	
	}
	include "anterior.php";
?>

	<h1>
		Cadastro de produtos
	</h1>
	<form action="cadprod2.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="titulo">Título do Produto</label>
			<input type="text" required name="titulo" id="titulo" class="form-control" />
		</div>
		<div class="form-group">
			<label for="descricao">Descrição do Produto</label>
			<input type="text" required name="descricao" id="descricao" class="form-control" />
		</div>
		<div class="form-group">
			<label for="preco">Preço</label>
			<input type="number" required name="preco" id="preco" class="form-control" />
		</div>
		<div class="form-group">
			<label for="categoria">Categoria</label>
			<select name="categoria" id="categoria" class="form-control">
				<option value="domestico">Doméstico</option>
				<option value="empresarial">Empresarial</option>
			</select>
		</div>
		<div class="form-group">
			<label>Escolha sua foto!</label>
			<input type="file" name="arquivo" class="form-control" accept="image/jpeg, image/png" required />
		</div>
		<button type="submit" class="btn btn-primary">Cadastrar Produto</button>
	</form>
<?php 
	include "posterior.php";
?>