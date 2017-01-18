<?php

var_dump($_POST);

$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$curso=$_POST["curso"];
$ciclo=$_POST["ciclo"];

$notas["prog"]=$_POST["prog"];
$notas["ed"]=$_POST["ed"];
$notas["lm"]=$_POST["lm"];
$notas["bd"]=$_POST["bd"];

$max=0;
$min=10;
$media=0;
$suma=0;

foreach ($notas as $key => $value) {
  if ($value > $max) {
    $max = $value;
  }
  if ($value<$min ) {
    $min=$value;
  }
  $suma=$suma+$value;
}
$media=$suma/4;

echo "El Alumno es : " . $nombre . "<br>" .
"Apellidos: " . $apellidos . "<br>" .
"Curso" . $curso . "<br>" .
"Ciclo " . $ciclo . "<br>";


echo "La nota maxima es: " . $max . "<br>";

echo "La nota mas baja es: " . $min . "<br>";
echo "La nota media es: " . $media;
echo "<br>";











?>
