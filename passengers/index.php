<?php
    require_once('functions.php');
    index();
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Passageiros</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Cadastrar Passageiros</a>
	    	<a class="btn btn-secondary" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
		<form class="form-inline">
			<div class="input-group col-md-5">
    <input type="text" class="form-control" placeholder="Procure pelo nome do passageiro!">
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
		<th width="30%">Nome</th>
		<th>CPF</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($passengers) : ?>
<?php foreach ($passengers as $passenger) : ?>
	<tr>
		<td><?php echo $passenger['name']; ?></td>
		<td><?php echo $passenger['cpf']; ?></td>
		<td class="actions text-left">
			<a href="view.php?id=<?php echo $passenger['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar cadastro completo</a>
			<a href="edit.php?id=<?php echo $passenger['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-passenger="<?php echo $passenger['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
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