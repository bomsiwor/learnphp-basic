<?php 

// Mengecek tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])):
    // Mengecek username & Password
    if( $_POST["username"]=="op" && $_POST["password"]=="999"):
        header("Location: admin.php");
        
        // Kalau salah, tampilkan pesan error
    else:
        $error = true;
    endif;
endif;    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if( isset($error) ): ?>
        <p style="color: red;">Username/password salah!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login!</button>
            </li>
        </form>
    </ul>
</body>
</html>