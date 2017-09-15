<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Passageiro <?php echo $passenger['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $passenger['name']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $passenger['cpf']; ?></dd>

	<dt>Data de Nascimento:</dt>
	<dd><?php echo $passenger['birthdate']; ?></dd>
	
	<dt>Sexo:</dt>
	<dd><?php echo $passenger['genre']; ?></dd>
	
</dl>

<dl class="dl-horizontal">

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $passenger['created']; ?></dd>
	
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $passenger['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>