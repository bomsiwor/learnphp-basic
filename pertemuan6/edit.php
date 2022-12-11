<?php 

require 'fungsi.php';

//ambil id dari URL
$id = $_GET["id"];

// querry data buku berdasarkan ID
$bukuw = query("SELECT * FROM pustakadata WHERE id='$id'")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ):

    //Cek apakah data berhasil di edit atau tidak
    if(edit($_POST)>0):
        echo "<script>
                alert('Data diedit!');
                document.location.href='index.php';
            </script>
        ";
    else:
        echo "<script>
                alert('Data gagal diedit!');
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
    <title>EDit Buku</title>
</head>
<body>
    <h2>Form EDit Buku</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $bukuw["id"]; ?>">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" value="<?= $bukuw["judul"]; ?>">
            </li>
            <li>
                <label for="isbn">ISBN :</label>
                <input type="text" name="isbn" id="isbn" value="<?= $bukuw["isbn"]; ?>">
            </li>
            <li>
                <label for="writer">writer :</label>
                <input type="text" name="writer" id="writer" value="<?= $bukuw["writer"]; ?>">
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" value="<?= $bukuw["tahun"]; ?>">
            </li>
            <li>
                <label for="penerbit">penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" value="<?= $bukuw["penerbit"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit buku</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Kembali ke list data</a>
</body>
</html>