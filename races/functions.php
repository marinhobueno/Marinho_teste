<?php
require_once('../config.php');
require_once(DBAPI);
$races = null;
$race = null;

					/**
					 *  Listagem de Corridas
					 */
					function index() {
						global $races;
						$races = find_all('races');
}

					/**		 *  Cadastro de Corridas		 */		
					function add() {	
						  if (!empty($_POST['race'])) {		
						  $today = 
						  date_create('now', new DateTimeZone('America/Sao_Paulo'));	
						  $race = $_POST['race'];	
						  $race['created'] = $today->format("Y-m-d H:i:s");	
						  save('races', $race);
						  header('location: index.php');	
								}	
							}
					
					/**		 *	Atualizacao/Edicao de Corrida		 */		
					function edit() {	
					$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));		
					if (isset($_GET['id'])) {			
						$id = $_GET['id'];				
					if (isset($_POST['race'])) {		
						$race = $_POST['race'];		
						$now->format("Y-m-d H:i:s");		
						update('races', $id, $race);		  
					header('location: index.php');		 
							} else {				 
								global $race;		 
								$race = find('races', $id);		
					} 	
							} else {		
							header('location: index.php');		
						}	
					}
					
					/**		 *  Visualização de uma Corrida	 */	
					function view($id = null) {	
					global $race;		
					$race = find('races', $id);	
					}
					
					/**		 *  Cancelar uma Corrida		 */	
					function delete($id = null) {		
					global $race;	
					$race = remove('races', $id);	
					header('location: index.php');	
					}