<?php 

require 'fungsi.php';

if( isset($_POST["submit"]) ):
    if(tambah($_POST)>0):
        echo "<script>
                alert('Data ditambahkan!');
                document.location.href='index.php';
            </script>
        ";
    endif;
    
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Form Tambah Buku</h2>
    <form action="" method="post">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul">
            </li>
            <li>
                <label for="isbn">ISBN :</label>
                <input type="text" name="isbn" id="isbn">
            </li>
            <li>
                <label for="writer">writer :</label>
                <input type="text" name="writer" id="writer">
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun">
            </li>
            <li>
                <label for="penerbit">penerbit :</label>
                <input type="text" name="penerbit" id="penerbit">
            </li>
            <li>
                <label for="cover">cover :</label>
                <input type="text" name="cover" id="cover">
            </li>
            <li>
                <button type="submit" name="submit">Tambah buku</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Kembali ke list data</a>
</body>
</html>