<?php 
// Cara agar halaman latihan4 tidak sembarangan dipakai/diketik untuk coba-coba
// Mengatasi juga injection data lewat url

if (
    !isset($_GET["nama"]) || 
    !isset($_GET["nim"])
):
    //fungsi untuk redirect/menendang
    header("Location: latihan3.php");
    exit;
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>NIM : <?= $_GET["nim"]; ?></li>
    </ul>

    <a href="latihan3.php">Kembali ke Daftar</a>
</body>
</html>