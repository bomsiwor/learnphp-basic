<?php 
//array : sebuah variabel yang mempunyai banyak nilai (elemen)
// tipe data dalam sebuah array bisa bermacam macam
//pasangan antara key dan value
// key-nya adalah index & dimulai dari 0

$hari = ["Senin", "selasa", "Rabu"];
$arr1 = [123, "Aku", true];

//cara menampilkan array
//var_dump(nama array)
//print_r(nama array)

//var_dump($hari)
//print_r($arr1)

// Menampilkan 1 Elemen dari array
// Boleh pakai echo
//echo $hari[0];

//Menambah elemen baru pada array
$hari[]="Kamis";
var_dump($hari);

?>