<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Corrida <?php echo $race['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Código da Corrida: </dt>
	<dd><?php echo $race['id']; ?></dd>

	<dt>Nome do Passageiro: </dt>
	<dd><?php echo $race['passenger_name']; ?></dd>

	<dt>Nome do Motorista:</dt>
	<dd><?php echo $race['driver_name']; ?></dd>
	
	<dt>Valor da Corrida:</dt>
	<dd><?php echo $race['race_value']; ?></dd>
	
</dl>

<dl class="dl-horizontal">

	<dt>Data de Registro:</dt>
	<dd><?php echo $race['created']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>