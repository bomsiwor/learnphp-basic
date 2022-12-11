<?php 
    //membuat function
    //function bisa dikasih default value


    function salam($nama="Guest",$chktime="Datang") {
        if (date("G")>0 && date("G")<5):
            $chktime="Dinihari";
        elseif(date("G")>=5 && date("G")<=10):
            $chktime="Pagi";
        elseif(date("G")>10 && date("G")<=15):
            $chktime="Siang";
        elseif(date("G")>15 && date("G")<=18):
            $chktime="Sore";
        elseif(date("G")>18 && date("G")<=23):
            $chktime="Malam";
        else:
            $chktime="Tengah Malam";
        endif;
        return "Selamat $chktime, $nama!";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam(); ?></h1>
    <p>Sekarang jam <?php echo date("H:i:s"); ?></p>
    <p>Kamu berada di zona <?php echo date("e") ?></p>
</body>
</html>