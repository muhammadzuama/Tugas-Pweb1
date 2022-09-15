<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <style>
        table,th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 1%;
        }
        table{
        font-family: arial, sans-serif;
        width: 65%;
        }
    </style>
</head>
<body>
    <center>
        <h1>Praktikum 03 - Introduction to PHP</h1>
    </center>
    <table align="center" >
    <?php
    for($i=1;$i<=100;$i++)
    {
        if ($i%3==0){
            echo "<tr><td align='center' style='background-color:black ;'> <li style='list-style-type: none;color:white;'>$i.</td>";
            echo "<td style='background-color:black ;'><li style='list-style-type: none; color:white;'>ini baris ke-$i</td></tr>";
        }
        else{
            echo "<tr><td width='100px'; align='center'>$i.</td>";
            echo "<td width='900px'><li style ='list-style-type: none'; >ini baris ke-$i</td></tr>";
        }
    }
    ?>
    </table>
<footer>
    <p style="text-align:center ;">{212410102032} - {Muhammad Zuama Al Amin}</p>
</footer>
</body>
</html>
