<?php 
require 'fungsi.php';
$buku = query("SELECT * FROM pustakadata");

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
    <h2><a href="tambah.php">Tambah!</a></h2>
    <br>
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
    <?php foreach($buku as $books): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $books["id"]; ?></td>
        <td>
            <a href="edit.php?id=<?= $books["id"]; ?>">edit</a> |
            <a href="hapus.php?id=<?= $books["id"]; ?>" onclick="return confirm('Hapus?');">hapud</a>
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
                <img src="img/<?= $books["cover"]; ?>" alt="" width="80">
            <?php endif; ?>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>    
    </table>
</body>
</html>