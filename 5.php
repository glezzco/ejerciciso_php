<?php
    /* Realizar un programa en PHP que muestre un valor al azar entre 1 y 6 con las caras de
un dado. Para ello puedes utilizar la función rand(valor_inicio, valor_final) y realizar la
captura de seis imágenes de un dado para hacerlo más visual.
*/
$random = rand(1,6);

if($random == 1){
    echo '<img src="/img/1.png" alt="">';
}elseif($random == 2){
    echo '<img src="/img/2.png" alt="">';
}elseif($random == 3){
    echo '<img src="/img/3.png" alt="">';
}elseif($random == 4){
    echo '<img src="/img/4.png" alt="">';
}elseif($random == 5){
    echo '<img src="/img/5.png" alt="">';
}elseif($random == 6){
    echo '<img src="/img/6.png" alt="">';
}
?>

