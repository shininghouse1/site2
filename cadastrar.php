<?php 
	include "anterior.php";
?>

<h1>Cadastro de usuário</h1>

<form method="post" action="cadastrar2.php">
	<div class="form-group">
		<label for="formnome">Nome</label>
		<input type="text" name="nome" id="formnome" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formemail">E-mail</label>
		<input type="email" name="email" id="formemail" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formsenha">Senha</label>
		<input type="password" name="senha" id="formsenha" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formcsenha">Confirmar Senha</label>
		<input type="password" onblur="verifica()" name="csenha" id="formcsenha" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formendereco">Endereço</label>
		<input type="text" name="endereco" id="formendereco" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formbairro">Bairro</label>
		<input type="text" name="bairro" id="formbairro" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formcidade">Cidade</label>
		<input type="text" name="cidade" id="formcidade" class="form-control" />
	</div>
	<div class="form-group">
		<label for="formestado">Estados</label>
		<select name="estado" class="form-control">
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
		</select>
		<div class="form-group">
			<button type="submit" class="btn btn-primary mt-3">Cadastrar</button>
		</div>
	</div>
</form>

<?php 
	include "posterior.php";
?>
<script>
	function verifica(){
		x= document.getElementById("formsenha").value;
		y= document.getElementById("formcsenha").value;
		if(x!=y){
			alert("Os valores da senha não conferem, por favor digite a senha novamente!");
			document.getElementById("formsenha").value = "";
			document.getElementById("formcsenha").value = "";
			document.getElementById("formsenha").focus();
		}
	}
</script>