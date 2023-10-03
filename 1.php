<?php

/*  Realizar un programa en el que se declare una variable de cada tipo de dato; Que se
 utilicen las comillas simples y dobles; que se concatenen varias cadenas; que se
 concatenen varias cadenas con sus valores correspondientes; que se realice la salida de
 una de las cadenas mediante echo y mediante print; que se declare una constante
 (mediante define y const); que se utilice var_dump(); donde se realice una conversión
 explícita de tipos; donde haga uso de referencias */


const constante = 23;
define("constante2","234");
$integer = 2;
$float =2.5;
$string="Holaaa Mundooo ";
$string2='de nuevoooo ';
$boolean=false;
$array=array('2',2,"Helouuuu ");
$null=null;


$string3=$string.$string2;
var_dump(constante);
echo "</br>";
var_dump(constante2);
echo "</br>";
echo $string3;
echo "</br>";
print($string);
?>