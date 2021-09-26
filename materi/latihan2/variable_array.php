<?php

//dalam pemrograman penghitunga dimulai dari 0
//contoh 0,1,2,3,4,5,6,7,

$lemari[] = "baju";
$lemari[] = "celana";
$lemari[] = "topi";
$lemari[] = "kaos";
$lemari[] = "sepatu";
echo "saya ingi mengambil $lemari[4] di lemari ";

// ==============================
echo "<br><br><br><br>";
// ==============================

$mobil = array("kursi", "roda", "spyon", "pintu");
echo "hasil " . $mobil[2];

// ==============================
echo "<br><br><br><br>";
// ==============================

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "[$k] => $v.\n";
}
