<?php 
/*Recibes una string de valores separados por coma. Debes eliminar del string los valores
duplicados, mostrando el valor inicial y el valor tras eliminar los duplicados. Por
ejemplo, para la siguiente cadena “1,2,3,2,4,1,5" se mostrará:
1,2,3,2,4,1,5
1,2,3,4,5 */

$string = "1,2,3,2,4,1,5"; //creamos la struing

$array = explode(",",$string);
$array_final= array_unique($array);

$string_final = implode(",",$array_final);

echo "El String inicial es: " . $string . "</br>";
echo "Y la String final es : " . $string_final;





?>