<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Corridas</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Cadastrar Corridas</a>
	    	<a class="btn btn-secondary" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
		<form class="form-inline">
			<div class="input-group col-md-5">
    <input type="text" class="form-control" placeholder="Procure pelo nome do passageiro ou do motorista!">
    <div class="input-group-btn">	
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
	</form>
	</div>
	


</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th width="30%">Nome do Passageiro</th>
		<th>Nome do Motorista</th>
		<th>Valor da Corrida</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($races) : ?>
<?php foreach ($races as $race) : ?>
	<tr>
		<td><?php echo $race['id']; ?></td>
		<td><?php echo $race['passenger_name']; ?></td>
		<td><?php echo $race['driver_name']; ?></td>
		<td><?php echo $race['race_value']; ?></td>
		<td class="actions text-left">
			<a href="view.php?id=<?php echo $race['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar dados completos</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-race="<?php echo $race['id']; ?>">
				<i class="fa fa-trash"></i> Cancelar Corrida
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>