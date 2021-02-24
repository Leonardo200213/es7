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
					<td><div>La terza e ultima fase del voto consiste nella conferma della selezione</div></td>
					
				
				
				
				<td>Scelga la lista a cui assegnare il Suo voto dall'elenco a comparsa qui sotto</td>
				
				<td>Lista: <br> Candidato:</td>
				
                
                </tr>

<?php
			session_start();
			$candidato = $_POST['nome'];
			$lista = $_SESSION['lista'];
			$chiave = $_SESSION['id'];  //chiave della lista
			echo"$chiave";
			echo"$candidato";
			
			echo"<form method='POST' action='Page5.php'>
			<input name='id' type='hidden' value='$chiave' disabled/> <br/>
			<label> LISTA: </label>
			<input name='lista' type='text' value='$lista' disabled/> <br/>
            <label> CANDIDATO: </label>
			<input name='nome' type='text' value='$candidato' disabled/> <br/>
			</form>";


            $_SESSION['nomina'] = $candidato;
		?>				
		
		<button type="button" class="btn btn-success" onclick="location.href='conferma.php'">Conferma</button>
		<button type="button" class="btn btn-success" onclick="location.href='index.php'">Annulla</button>
				<br>
			</table>
			<br>
		
	</body>
</html>