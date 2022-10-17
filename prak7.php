<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 07</title>
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
    <h2 style="padding: 20px; ;">Praktikum 07 – Practical PHP</h2>
    <table >
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
        </tr>
        <?php for($i=1;$i<1000;$i++){?>
        <tr>
            <td><?php echo "$i." ?></td>
            <td><?php     
            $date=date_create("2022-01-00");
            date_modify($date,"+$i days");
            echo date_format($date,"j F Y")."<br>";?></td>
            <td><?php
            $d = $i;
            $date='2022-01-00';
            $currentDate = strtotime($date);
            $currentDate = strtotime("+$i day", $currentDate);
            $number = sprintf('%03d',$d);
            $formatted1 = date("y-m-d", $currentDate);
            echo "TRN-$formatted1-$number";
             ?></td>
            <td align="right"><?php echo "Rp ". number_format($i *1000 ,0,",",".")?></td>
        </tr>
    <?php } ?>
    </table>
<footer>
    <p style="text-align:center ;">{212410102032} - {Muhammad Zuama Al Amin}</p>
</footer>
</body>
</html>