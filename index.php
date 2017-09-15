<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="drivers/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Cadastrar Motorista</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="drivers" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 ">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Motoristas</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="drivers/add.php" class="btn btn-success">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Cadastrar Passageiro</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="drivers" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 ">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Passageiros</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="races/add.php" class="btn btn-info">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Registrar Corrida</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="races" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 ">
					<i class="fa fa-car fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Corridas</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>