<!-- Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero
più di una volta -->
<?php
for($i = 0; $i <= 14; $i++){
    $array[] = mt_rand(0, 100);
}


?>

<h1> <?php var_dump($array) ?>  </h1>