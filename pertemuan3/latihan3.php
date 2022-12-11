<?php 

// Membuat array associative
// Mengirim data ke halaman latihan4
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>
            <a href="latihan4.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>