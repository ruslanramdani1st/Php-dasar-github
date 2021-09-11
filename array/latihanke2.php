<?php
echo "1. Array dengan menggunakan PRINT_R()";
$array = [];
$array[] = 'Indonesia';
$array[] = 'Malaysia';
$array[] = 'Singapura';
$array[] = 'Brunei Darussalam';
$array[] = 'Filipina';

echo '<pre>';
print_r($array);

echo "<br>";

echo "2. Array Assosiatif<br>";
echo "<br>";
$negara = [
  'Indonesia' => 'Jakarta',
  'Malaysia' => 'Kuala Lumpur',
  'Singapura' => 'Singapura',
  'Thailand' => 'Bangkok',
  'Filipina' => 'Manila'
];

foreach ($negara as $kenegaraan => $ibukota) {

    echo "<li>";
    echo 'Ibukota '. $kenegaraan . ' adalah ' . $ibukota . '<br>';
    echo "<br>";
    echo "</li>";
}
?>