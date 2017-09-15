<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Passageiro</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" placeholder="Qual seu nome?!" name="passenger['name']"required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="text" class="form-control" placeholder="Informe seu CPF!" name="passenger['cpf']"required>
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" placeholder="Nos diga quando nasceu!" name="passenger['birthdate']"required>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Sexo</label>
	  <input type="text" class="form-control" placeholder="Informe o seu sexo!" name="passenger['genre']"required>	
    </div>
	
	
	<div class="form-group col-md-2">
	<label for="campo3">Data de Cadastro</label>	
	<input type="text" class="form-control" name="passenger['created']" disabled>
	</div>	

 </div>
  
  <div id="actions" class="row">
    <div class="col-md-11">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="../index.php" class="btn btn-danger">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>