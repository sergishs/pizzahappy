<?php
$sx = simplexml_load_file('../data/pizzes.xml'); // Carrega el fitxer XML com un objecte 

foreach($sx->pizza as $item) // Carrega tots els nodes de l'etiqueta "pizza" 
{
	echo "<h1>" . $item->id . " => " . $item->nom . "</h1><br>";
}
?>
