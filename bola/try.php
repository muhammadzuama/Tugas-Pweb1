
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="try.php">
  <label for="nama">angka1:</label><br>
  <input type="text" id="nama" name="nama"><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
<?php
  $nama = $_POST['nama'];
  function angka(int $input1){
    return $input1;
  }
  if(angka($nama)%2==1){
    echo "Weird";
  }elseif(angka($nama)==2 && angka($nama)==5){
    echo "Not Weird";
  }elseif(angka($nama)==6 && angka($nama)==20){
    echo "Weird";
  }elseif(angka($nama)>20){
    echo "Not Weird";
  }
?>