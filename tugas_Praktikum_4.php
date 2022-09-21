<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 4</title>
    <style>
        *{
            font-family:Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h2 style="padding: 20px; ;">Praktikum 04 - PHP Function</h2>
<?php
function luas(float $r):float
{
    $phi=3.14;
    $luas =$phi*($r*$r);
    return $luas;
}
function keliling(float $r):float
{
    $phi=3.14;
    $k= $phi *$r*2;
    return $k;
}
?>

<ol>
    <?php
    for ($i=13;$i<=21;$i++){
        $luas_ling=round(luas($i),2);
        $keliing_ling=round(keliling($i),2);
        if($i%2==1){
            if($i>=13 && $i<=18){
                echo "<b><li style='teks-align:center'><b>Jika ada lingkaran dengan jari-jari $i, maka luas lingkaran tersebut adalah <span style ='color:red'> $luas_ling</span>". "</li>";
            }
            elseif($i>=19 && $i<=21){
                echo "<li>Jika ada lingkaran dengan jari-jari $i, maka keliling lingkaran tersebut adalah  <span style ='color:red'>$keliing_ling </span>". "</li>";
            }
        }
    }
    ?>
</ol>
<footer>
    <center>
        {212410102032}-{Muhammad Zuama Al Amin}
    </center>
</footer>
</body>
</html>

