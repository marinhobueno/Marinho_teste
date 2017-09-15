<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar dados do Passageiro</h2>

<form action="edit.php?id=<?php echo $passenger['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="passenger['name']" value="<?php echo $passenger['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" name="passenger['cpf']" value="<?php echo $passenger['cpf']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" name="passenger['birthdate']" value="<?php echo $passenger['birthdate']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Sexo</label>
      <input type="text" class="form-control" name="passenger['genre']" value="<?php echo $passenger['genre']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="passenger['created']" disabled value="<?php echo $passenger['created']; ?>">
    </div>
	
	
  </div>

 


  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-danger">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>