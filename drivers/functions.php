<?php
require_once('../config.php');
require_once(DBAPI);
require_once('../inc/database.php');
$drivers = null;
$driver = null;

					/**
					 *  Listagem de Motoristas
					 */
					function index() {
						global $drivers;
						$drivers = find_all('drivers');
}

					/**		 *  Cadastro de Motoristas		 */		
					function add() {
					  if (!empty($_POST['driver'])) {
						
						$today = 
						  date_create('now', new DateTimeZone('America/Sao_Paulo'));
						$driver = $_POST['driver'];
						$driver['created'] = $today->format("Y-m-d H:i:s");
						save('drivers', $driver);
						//header('location: index.php');
					  }
					}
					
					/**		 *	Atualizacao/Edicao de Motorista		 */		
						function edit() {	
					$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));		
					if (isset($_GET['id'])) {			
						$id = $_GET['id'];				
					if (isset($_POST['driver'])) {		
						$driver = $_POST['driver'];		
						$driver['modified'] = $now->format("Y-m-d H:i:s");		
						update('drivers', $id, $driver);		  
					header('location: index.php');		 
							} else {				 
								global $driver;		 
								$driver = find('drivers', $id);		
					} 	
							} else {		
							header('location: index.php');		
						}	
					}
					
					/**		 *  Visualização de um Cliente		 */	
					function view($id = null) {	
					global $driver;		
					$driver = find('drivers', $id);	
					}
					
					/**		 *  Exclusão de um Cliente		 */	
					function delete($id = null) {		
					global $driver;	
					$driver = remove('drivers', $id);	
					header('location: index.php');	
					}