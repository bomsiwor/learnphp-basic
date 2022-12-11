<?php 

//Belajar foreach
//Perulangan untuk array

$arr1=[3,4,534,123,1,67,98];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            line-height: 50px;
            border: 5px;
            border-color: black;
            margin: 3px;
            float: left;
        }
        .clear {clear: both;}
    </style>
</head>
<body>
    <?php for($i=0; $i<count($arr1); $i++): ?>
        <div class="kotak"><?= $arr1[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>
    
    <p>yang bawah ini pakai foreach</p>
    <?php foreach( $arr1 as $a): ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

</body>
</html>