<?php
	$connection=NULL;
	$connection = new PDO("mysql:host=127.0.0.1;port=3307;dbname=elezioni","root","");
	$query = "SELECT id_lista, nome_lista FROM liste";
	$result = $connection->query($query);
	
	echo"
	<select name='lista'>
	<option> Selezionare lista </option>";
	
	while($row = $result->fetch(PDO::FETCH_OBJ)) 
	{
		echo"<option > $row->nome_lista </option>";	
	}
	echo"</select>";
	$result->closeCursor();
	$connection=NULL;
?>