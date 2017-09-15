<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar dados do Motorista</h2>

<form action="edit.php?id=<?php echo $driver['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="driver['name']" value="<?php echo $driver['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="driver['cpf']" value="<?php echo $driver['cpf_cnpj']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" name="driver['birthdate']" value="<?php echo $driver['birthdate']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Modelo do Carro</label>
      <input type="text" class="form-control" name="driver['car_model']" value="<?php echo $driver['car_model']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Status</label>
      <input type="text" class="form-control" name="driver['driver_status']" value="<?php echo $driver['driver_status']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="driver['phone']" value="<?php echo $driver['phone']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="driver['created']" disabled value="<?php echo $driver['created']; ?>">
    </div>
	
	   <div class="form-group col-md-3">
      <label for="campo3">Sexo</label>
      <input type="text" class="form-control" name="driver['genre']" value="<?php echo $driver['genre']; ?>">
    </div>
	
  </div>

 


  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="../index.php" class="btn btn-danger">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>