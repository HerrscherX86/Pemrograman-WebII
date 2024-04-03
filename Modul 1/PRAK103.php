<?php
$celsius = 37.841 ;

// Konversi ke Reamur
$reamur = ($celsius * 4) / 5;

// Konversi ke Fahrenheit
$fahrenheit = ($celsius * 9/5) + 32;

// Konversi ke Kelvin
$kelvin = $celsius + 273.15;

echo "Suhu dalam Celsius: " . number_format($celsius, 4) . " C <br>";
echo "Suhu dalam Reamur: " . number_format($reamur, 4) . " R <br>";
echo "Suhu dalam Fahrenheit: " . number_format($fahrenheit, 4) . " F <br>";
echo "Suhu dalam Kelvin: " . number_format($kelvin, 4) . " K <br>";
?>
