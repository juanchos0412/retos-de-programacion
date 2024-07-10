<?php
//Sitio web PHP https://www.php.net/ 
//Comentario de una sola linea 
/*
   Comentario de varias lineas  
*/
$variable = "Esta es la primera variable";
const viable2 = "Esta es la segunda variable";

//yipos de variables
$string = "este es un estring (cadena de texto)";
$booleano = true;
$int = 11;
$float = 11.56;
$array = array(
    "Hola" => "Adios",
    "undefined" => "undefined",
);
$arraycorto = [
    "Hola" => "Adios",
    "undefined" => "undefined",
];

class objeto
{
    public $objeto;
}

$object = new objeto();

echo "¡Hola, PHP!";

echo get_debug_type($string);
echo get_debug_type($booleano);
echo get_debug_type($int);
echo get_debug_type($float);
echo get_debug_type($array);
echo get_debug_type($arraycorto);
echo get_debug_type($object);