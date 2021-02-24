<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="stile.css">
	</head>
	<body>
		<div class="p-3 mb-2 bg-primary text-white">
			<center>
				<p class="fs-3">
					<b>
						Selezione della lista
					</b>
				</p>
			
			
			<table id="t01">
				<tr>
					<td><div>La seconda fase del voto prevede</div></td>
					
				</tr>
				
				<tr>
				<td>Scelga il candidato a cui assegnare il Suo voto dall'elenco a comparsa qui sotto</td>
				</tr>

		 <?php
				session_start();
				$host = "localhost";
				$user = "root";
				$db = "elezioni";
				$nome = $_POST['lista'];
				$chiave = 0;
					$connection=NULL;
					$connection = new PDO("mysql:host=127.0.0.1;port=3307;dbname=elezioni", "root", "");

					$chiave = GETID($connection, $nome);
					$_SESSION['lista'] = $nome;
					$_SESSION['id'] = $chiave;
					$query = "SELECT cognome, nome FROM candidati WHERE id_lista = $chiave";
					$result = $connection->query($query);
					
					echo"<div class='row'><div class='col-md-12'>
					<form method='POST' action='page4.php'>
					<select name='nome'>
					<option> Selezionare candidato </option>";
					while($row = $result->fetch(PDO::FETCH_OBJ)) 
					{
						echo"<option>$row->cognome _ $row->nome</option>";	
					}
					echo"</select>
					<button type='submit' class='btn btn-success btn-lg'>
					PROSEGUI </button>
					</form></div> </div>";
					$result->closeCursor();
					$connection=NULL;
					
					function GETID($connection, $nome){
						$chiave = 0;
						$n = str_replace("'", "\'", $nome);
						$query = "SELECT id_lista FROM liste WHERE nome_lista = '$n'";
						$result = $connection->query($query);
						while($row = $result->fetch(PDO::FETCH_OBJ)) 
						{
							$chiave = $row->id_lista;	
						}
						return $chiave;
					}
					
				?>	
				<button type="button" class="btn btn-success" onclick="location.href='page4.php'">Conferma</button>
					</center>
					</div>
				</form>
				
				<br>
			</table>
			<br>
		
	</body>
</html>