<?php 
/*Declara un array con los valores: 1, 2, ‘antonio’, 200, ‘pepe’. Recorre el array empezando
por el último elemento, ‘pepe’, mostrando cada elemento en una línea separada.*/

$array = array(1,2,'antonio',200,'pepe');//declaramos el array

for ($i = count($array) - 1; $i >= 0; $i--) { //recorremos el array al revez
    echo $array[$i] . "<br>"; //printeamos el array
}
?>
