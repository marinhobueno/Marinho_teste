<?php
require_once('../config.php');
require_once(DBAPI);
$passengers = null;
$passenger = null;

					/**
					 *  Listagem de Passageiros
					 */
					function index() {
						global $passengers;
						$passengers = find_all('passengers');
}

					/**		 *  Cadastro de Passageiros		 */		
					function add() {	
						  if (!empty($_POST['passenger'])) {		
						  $today = 
						  date_create('now', new DateTimeZone('America/Sao_Paulo'));	
						  $passenger = $_POST['passenger'];	
						  $passenger['created'] = $today->format("Y-m-d H:i:s");	
						  save('passengers', $passenger);
						  header('location: index.php');	
								}	
							}
					
					/**		 *	Atualizacao/Edição de Passageiro		 */		
					function edit() {	
					$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));		
					if (isset($_GET['id'])) {			
						$id = $_GET['id'];				
					if (isset($_POST['passenger'])) {		
						$passenger = $_POST['passenger'];		
						$passenger['modified'] = $now->format("Y-m-d H:i:s");		
						update('passengers', $id, $passenger);		  
					header('location: index.php');		 
							} else {				 
								global $passenger;		 
								$passenger = find('passengers', $id);		
					} 	
							} else {		
							header('location: index.php');		
						}	
					}
					
					/**		 *  Visualização de um Passageiro		 */	
					function view($id = null) {	
					global $passenger;		
					$passenger = find('passengers', $id);	
					}
					
					/**		 *  Exclusão de um Passageiro		 */	
					function delete($id = null) {		
					global $passenger;	
					$passenger = remove('passengers', $id);	
					header('location: index.php');	
					}