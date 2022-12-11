<?php 
//koneksi ke database phpdasar
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $books=[];
    while( $book = mysqli_fetch_assoc($result)){
        $books[]=$book;
    }
    return $books;
}

?>