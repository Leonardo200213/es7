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
				<select name="dropdown2" id="dropdown2">
					<option value="gente">Per il bene della gente</option>
					<option value="democrazia">Democrazia sempre</option>
					<option value="viva">Viva l'Italia</option>
					<option value="repubblica">Repubblica nuova</option>
					<option value="presto">Facciamo presto!</option>
				</select>
		 		<?php
					include "collegamento.php";
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
