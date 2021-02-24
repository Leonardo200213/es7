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
					<td><div>La prima fase del voto prevede</div></td>
					
				</tr>
				
				<tr>
				<td>Scelga la lista a cui assegnare il Suo voto dall'elenco a comparsa qui sotto</td>
				</tr>

				<form method="POST" action="page3.php">
			<?php
				include'collegamento.php';
			?>
			<button type="submit" class="btn btn-success">Conferma</button>
			</form>
				
				<br>
			</table>
			<br>
		
	</body>
</html>