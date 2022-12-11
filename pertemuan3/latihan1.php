<?php 
// Belajar method GET & POST
// Belajar variabel local, global, dan Superglobal

$x=99; // Ini merupakan variable local yang cuma bisa dipakai di latihan1.php

function panggil() {
    //Untuk memanggil variable x supaya bisa dipakai di fungsi ini :
    // global

    global $x;
    echo $x;
    //Variable x diatas cuma local di fungsi panggil saja
}

panggil();

?>