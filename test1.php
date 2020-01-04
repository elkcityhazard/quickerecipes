<?php // test1.php
$recipe_title = "Cinnamon French Toast";
echo $recipe_title;
echo "<br>";
$recipe_ingredients = array('bread', 'milk', 'cinnamon', 'eggs');
foreach($recipe_ingredients as $ingredient) {
	echo $ingredient . "<br>";
	}

//time stuff

echo date("l F j , Y h:i:sa");
?>