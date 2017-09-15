<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Motorista <?php echo $driver['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $driver['name']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $driver['cpf_cnpj']; ?></dd>

	<dt>Data de Nascimento:</dt>
	<dd><?php echo $driver['birthdate']; ?></dd>
	
	<dt>Sexo:</dt>
	<dd><?php echo $driver['genre']; ?></dd>
	
</dl>

<dl class="dl-horizontal">
	<dt>Modelo do Carro:</dt>
	<dd><?php echo $driver['car_model']; ?></dd>

	<dt>Status:</dt>
	<dd><?php echo $driver['driver_status']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $driver['phone']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $driver['created']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $driver['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>