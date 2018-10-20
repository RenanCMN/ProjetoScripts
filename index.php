<?php
require('./client/navbar.php');
?>

<div class="container">
	<div class="jumbotron">
		<form class="form-group" method="POST" action="serve/connect.php">
			<h1>Formulario<small> cliente</small></h1>
			<label>Nome</label>
			<input type="text" class="form-control" name="nome">
			<label>Email</label>
			<input type="text" class="form-control" name="email">
			<label>CPF</label>
			<input type="text" class="form-control" name="cpf">
			<label>Endereço</label>
			<input type="text" class="form-control" name="endec">
			<label>Senha</label>
			<input type="password" class="form-control" name="password"><br>
			<!--Button submit action  in server/connect.php -->			
			<input type="submit" class="form-control btn btn-primary" value="Cadastrar" name="btncadastro">
		

		</form>
	</div>
</div>


<?php
require('./client/footer.php');
?>