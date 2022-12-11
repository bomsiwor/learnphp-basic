<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Selamat datang, <?= $_POST["nama"]; ?>!</h1>
    NIM kamu adalah <?= $_POST["nim"]; ?>
    <br>
    <a href="latihan5.php">Kembali</a>
</body>
</html>