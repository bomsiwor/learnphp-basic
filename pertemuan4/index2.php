<?php 
//koneksi ke database phpdasar
$db = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data tabel pustakadata / query table pustakadata
$result = mysqli_query($db, "SELECT * FROM pustakadata");
//var_dump($result);

//mengambil data (fetch) dari tabel pustakadata
//mysqli_fetch_row - mengembalikan array numerik
//mysqli_fetch_assoc - mengembalikan array asosiatif
//mysqli_fetch_array - mengembalikan dua dua nya
//mysqli_fetch_object - mengembalikan objek

//menampilkan semua data
//while( $books = mysqli_fetch_assoc($result)){
//    var_dump($books);
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Halaman Admin Pustaka</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>    
        <th>No.</th>    
        <th>ID</th>    
        <th>Aksi</th>    
        <th>Judul</th>    
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun terbit</th>
        <th>ISBN</th>
        <th>Gambar</th>
    </tr>

    <?php $i=1; ?>
    <?php while( $books=mysqli_fetch_assoc($result) ): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $books["id"]; ?></td>
        <td>
            <a href="">edit</a> |
            <a href="">hapud</a>
        </td>
        <td><?= $books["judul"]; ?></td>
        <td><?= $books["writer"]; ?></td>
        <td><?= $books["penerbit"]; ?></td>
        <td><?= $books["tahun"]; ?></td>
        <td><?= $books["isbn"]; ?></td>
        <td>
            <?php if(empty($books["cover"])): ?>
                No Image
            <?php else: ?>
                <img src="img/<?= $books["cover"]; ?>" alt="" width="50">
            <?php endif; ?>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>    
    </table>
</body>
</html>