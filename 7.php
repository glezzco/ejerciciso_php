<?php
/*Crea y muestra un array con los números pares entre 1 y 100. */
$numerosPares = array();

// Generar y almacenar los números pares entre 1 y 100
for ($i = 2; $i <= 100; $i += 2) {
    $numerosPares[] = $i;
}

// Mostrar los números pares en la página web
echo "Números pares entre 1 y 100: " . implode(", ", $numerosPares);
?>

?>