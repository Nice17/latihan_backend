<?php


//operasi logika 
//  === (bolean true/false)
//  ==
//  <=
//  >=
//  <
//  >

// if (condition) {
//     # code...
// }



$nilai = 8;

if ($nilai  >= 8) {
    echo "mendapatkan nilai A";
} else if ($nilai >= 7) {
    echo "mendapatkan nilai B";
} else if ($nilai <= 5) {
    echo " mendapatkan nilai C";
}


// switch ($variable) {
//     case 'value':
//         # code...
//         break;

//     default:
//         # code...
//         break;
// }

echo "<br><br>";

$hari = '5';

switch ($hari) {
    case '1':
        echo 'SENIN';
        break;
    case '2':
        echo 'SELASA';
        break;
    case '3':
        echo 'RABU';
        break;
    case '4':
        echo 'KAMIS';
        break;
    case '5':
        echo "JUM'AT";
        break;
    case '6':
        echo 'SABTU';
        break;
    case '7':
        echo 'MINGGU';
        break;
}
