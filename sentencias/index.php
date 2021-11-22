<?php
$edad = 29;

echo "------SENTENCIA IF/ELSE-------";
echo "<br/>";

if ($edad >= 18) {
    echo "Eres mayor de edad";
} else {
    echo "Eres menor de edad";
}
echo "<br/>";


echo "------SENTENCIA SWITCH-------";
echo "<br/>";

$option = "2";

switch ($option) {
    case "1":
        echo "case 1";
        break;
    case "2":
        echo "case 2";
        break;
    case "3":
        echo "case 3";
        break;
    default:
        echo "case 4";
        break;
}

echo "<br/>";

echo "------SENTENCIA FOR-------";
echo "<br/>";

$limite = 10;

for ($i = 1; $i <= $limite; $i++) {
    echo "Hola $i";
    echo "<br/>";
}

echo "<br/>";

echo "------SENTENCIA WHILE-------";
echo "<br/>";

$c = 1;
while ($c <= 10) {
    echo "$c.-Hello world!";
    echo "<br/>";
    $c++;
}

echo "<br/>";

echo "------SENTENCIA DO-WHILE-------";
echo "<br/>";
$salir = false;
$a = 0;
do {
    echo "Welcome, PHP";
    echo "<br/>";
    $a++;
    if ($a == 5) {
        $salir = true;
    }
} while (!$salir);
