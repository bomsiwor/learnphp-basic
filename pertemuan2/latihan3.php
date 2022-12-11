<?php 

// Membuat array associative
$mahasiswa=[
    [
        "nama" => "Wor",
        "nim" => "021900009",
        "jurusan" =>"Elins",
        "email"=>"bomsiwor@gmail.com",
        "foto" => "boma.jpg"
    ],
    [
        "nama" => "Zahra",
        "nim" => "021900032",
        "jurusan" =>"Elins",
        "email"=>"Email",
        "foto" => "jara.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $siswa): ?>
    <ul>
        <li><img src="img/<?php echo $siswa["foto"] ?>" alt=""></li>
        <li>Nama : <?= $siswa["nama"]; ?></li>
        <li>NIM :<?= $siswa["nim"]; ?></li>
        <li>Prodi :<?= $siswa["jurusan"]; ?></li>
        <li>Email : <?= $siswa["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>