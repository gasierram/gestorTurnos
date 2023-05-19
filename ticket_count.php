<?php

$fileName = "counter.txt";

if (!file_exists($fileName)) {
    touch($fileName);
}
# Obtenemos su contenido
$contenido = trim(file_get_contents($fileName));
# Si está vacío, lo igualamos a cero
if ($contenido == "" || $contenido == 0) {
    $shift = 0;
} else {
    # Si no, las shift son lo que tenga el archivo
    $shift = intval($contenido);
}
#aumentamos turno en 1 
$shift++;
if($shift > 99){
    $shift = 1;
}

# escribir el valor en el archivo
file_put_contents($fileName, $shift);

echo($shift);