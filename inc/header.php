<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Marinho_Teste</title>
    <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">	
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
		
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div id="main" class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">Teste do Marinho</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Motoristas <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>drivers">Gerenciar Motoristas</a></li>
                    <li><a href="<?php echo BASEURL; ?>drivers/add.php">Cadastrar Motorista</a></li>
                </ul>
            </li>
          </ul>
		 
		 <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Passageiros <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>passengers">Listar Passageiros</a></li>
                    <li><a href="<?php echo BASEURL; ?>passengers/add.php">Cadastrar Passageiro</a></li>
                </ul>
            </li>
          </ul>
		  <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                   Corridas <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>races">Listar Corridas</a></li>
                    <li><a href="<?php echo BASEURL; ?>races/add.php">Registrar Corrida</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <main class="container">