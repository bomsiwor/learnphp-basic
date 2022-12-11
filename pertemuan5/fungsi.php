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

function tambah($data) {
        //ambil data dari form
        global $db;
        $judul  = htmlspecialchars($data["judul"]);
        $isbn   = htmlspecialchars($data["isbn"]);
        $writer = htmlspecialchars($data["writer"]);
        $tahun  = htmlspecialchars($data["tahun"]);
        $penerbit = htmlspecialchars($data["penerbit"]);
        $cover  = htmlspecialchars($data["cover"]);
    
        $query = "INSERT INTO pustakadata
                    VALUES
                    ('', '$judul', '$isbn', '$writer', '$tahun', '$penerbit', '$cover'
                    )";
    
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    $query = "DELETE FROM pustakadata WHERE id='$id'";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>