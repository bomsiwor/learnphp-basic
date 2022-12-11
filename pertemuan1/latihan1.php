<?php 
// Pengulangan
// for
// while
// do .. while
// for each : untuk array

// untuk membuat baris baru di browser. Pakai <br>

//for ($i=0; $i<10; $i++){
//    echo "Pengulangan ke-$i <br>";
//}

//$i=0;
//while($i<5){
//    echo "Perulangan while ke-$i <br>";
//    $i++;
//}

/*
Pada while, nilai awal ditulis diluar fungsi, dan increment ditaruh di dalam fungsi while)
*/

$i=0;
do{
    echo "Perulangan ke $i<br>";
    $i++;
} while( $i < 8 );

?>