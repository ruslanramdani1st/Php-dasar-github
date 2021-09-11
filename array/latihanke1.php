<?php
echo "1. Program array numeric <br>";
echo "<br>";
$jurusan = [
    "Jurusan Teknik Informanika",
    "Jurusan Sistem Informasi",
    "Jurusan Teknik Komputer",
    "Jurusan Manajement Informatika"
];

foreach ($jurusan as $kejuruan => $jurus) {

  echo $jurus . ' - ada di index ' . $kejuruan;
  echo '<br>';
} 

echo "<br>";

echo "2. Program array assosiatif <br>";
echo "<br>";
$jurusan1 = [
  'jurusan1' => 'Teknik Informanika',
  'jurusan2' => 'Sistem Informasi',
  'jurusan3' => 'Teknik Komputer',
  'jurusan4' => 'Manajement Informatika'
];

foreach ($jurusan1 as $kejuruan1 => $jurus1) {

echo 'kata kunci index ='. $kejuruan1 . ', Nilai = ' . $jurus1;
echo '<br>';
} 
?>