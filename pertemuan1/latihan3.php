<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <style>
        .warnabaris{
            background-color: coral;
        }
        .warnanormal{
            background-color: darkslategray;
        }
    </style>
</head>
<body>
    <h1>Latihan 3!
        <h2>Perulangan dan Kondisi</h2>
    </h1>
    <p>Ini percobaan untuk membuat tabel dan menghighlight kolom dengan kondisi tertentu</p>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i=1; $i<=8; $i++ ) : ?>
            <tr>
                <?php for($j=1; $j<=8; $j++) :?>
                    <?php if($i*$j>=16 && ($i*$j)%2==0) : ?>
                        <td class="warnabaris"><?= "$i,$j"; ?></td>
                    <?php else: ?>
                        <td class="warnanormal"><?= "$i,$j"; ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>