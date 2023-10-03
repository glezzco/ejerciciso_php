<?php
/*Crea un array de 5 números aleatorios entre 20 y 30, y muestralo. */
$celdas = array(); //creamos el array vacio 

    for ($i=0; $i <5; $i++) { //hacemos un for para que me coloque solo 5 elemtos
        $celdas[] = rand(20,30);//introducimos el array con "[]" para que coloque los numero en los espacios
    
    }
    
echo "Los numero son: "."</br>" .implode("</br>",$celdas); //printamos con el implode para que lo transforme en una string

?>