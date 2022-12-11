<?php 

$mahasiswa=[["Wor","021900009","Elins","Email","Mbuh"],
["Zahra","021900032","Elins","Email","Mbuh"]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $siswa): ?>
    <ul>
        <li>Nama : <?= $siswa[0]; ?></li>
        <li>NIM :<?= $siswa[1]; ?></li>
        <li>Prodi :<?= $siswa[2]; ?></li>
        <li>Email : <?= $siswa[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>