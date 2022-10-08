<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 PHP Array</title>
    <style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
    table,th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .table-1{
        position: absolute;
        width: 239px;
        height: 239px;
        left: 25px;
        top: 20%;
    }

    .table-2{
        position: absolute;
        width: 239px;
        height: 239px;
        left: 400px;
        top: 20%;
    }

    .table-3{
        position: absolute;
        width: 239px;
        height: 239px;
        left: 750px;
        top: 20%;
    }

    .table-4{
        position: absolute;
        width: 239px;
        height: 239px;
        left: 1100px;
        top: 20%;
    }
    .center{
        position: absolute;
        height: 71px;
        left: 500px;
        top: 500px;
    }
    </style>
</head>
<body>
<h2 style="padding: 20px; ;">Praktikum 06 - PHP Array</h2>
    <?php 
    
    $data=["Manchester United","Bayern Munchen","Chelsea",
            "Manchester City","Barcelona","Real Madrid",
            "Juventus","Arsenal","Ac Milan","Inter Milan"];
    shuffle($data);
    $group1=array_slice($data,0,3);
    $group2=array_slice($data,3,3);
    $group3=array_slice($data,6,4);
    shuffle($data);
    ?>

    <div class="table-1">
        <li style="list-style-type:none ;">Daftar Perserta:</li>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Perserta</th>
            </tr>
            <?php
            for($i=1;$i<=10;$i++)
            {
                echo "<tr><td width='40px' align='center'>"."$i."."</td>";
                echo "<td width='200px';'>". $data[$i-1]."</td></tr>";
            }
            ?>
        </table>
    </div>
    <div class="table-2">
        <li style="list-style-type:none ;">Kelompok 1:</li>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Perserta</th>
            </tr>
            <?php foreach ($group1 as $no => $kel1) {?>
            <tr>
                <td style="text-align:center ;" width='40px;'><?php echo $no+1 ."." ;?></td>
                <td width='200px;'><?php echo $kel1 ;?></td>
            </tr>
            <?php };?>
        </table>
    </div>

    <div class="table-3">
        <li style="list-style-type:none ;">Kelompok 2:</li>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Perserta</th>
            </tr>
            <?php foreach ($group2 as $no => $kel2) {?>
            <tr>
                <td style="text-align:center ;" width='40px;'><?php echo $no+1 ."." ;?></td>
                <td width='200px;'><?php echo $kel2 ;?></td>
            </tr>
            <?php };?>
        </table>
    </div>

    <div class="table-4">
        <li style="list-style-type:none ;">Kelompok 3:</li>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Perserta</th>
            </tr>
            <?php foreach ($group3 as $no => $kel3) {?>
            <tr>
                <td style="text-align:center ;" width='40px;'><?php echo $no+1 ."." ;?></td>
                <td width='200px;'><?php echo $kel3 ;?></td>
            </tr>
            <?php };?>
        </table>
    </div>

    <div class="center">
        <p>{212410102032} - {Muhammad Zuama Al Amin}</p>
    </div>
</body>
</html>