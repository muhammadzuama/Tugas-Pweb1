<?php
session_start();
if($_SESSION["login"] == false) {
    echo '<script>window.location="login.php"</script>';
  }
else{
  echo $_SESSION["id"];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>
  
</body>
</html>