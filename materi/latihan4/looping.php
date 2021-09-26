<?php

// while ($a <= 10) {
//     # code...
// }
$a = 0;
while ($a < 10) {
    $a++;
    echo "saya mintaa maaf saya tidak akan mengulangi kesalahan lagi $a <br>";
}

echo '<br><br><br>';

// for ($i=0; $i < ; $i++) { 
//     # code...
// }

for ($i = 1; $i <= 10; $i++) {
    echo "saya mintaa maaf saya tidak akan mengulangi kesalahan lagi $i <br>";
}


echo '<br><br><br>';

//untuk parcing variable array

// foreach ($variable as $key => $value) {
//     # code...
// }


//  1      2       3
$lemari['data'] = 'baju';
$lemari[] = 'celana';
$lemari[] = 'topi';
$lemari[] = 'kaos';

$no = 1;
//            1       2       3
foreach ($lemari as $key) {
    echo $no++ . ". " . $key . "<br>";
}
