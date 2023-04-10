<?php
require_once "config.php";
$connection=getconnection();
$data="SELECT * FROM activity LIMIT 5";
$result=$connection->query($data);
$connection=null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="basic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
    
    $(document).ready(function(){
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();
        
        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function(){
            if(this.checked){
                checkbox.each(function(){
                    this.checked = true;                        
                });
            } else{
                checkbox.each(function(){
                    this.checked = false;                        
                });
            } 
        });
        checkbox.click(function(){
            if(!this.checked){
                $("#selectAll").prop("checked", false);
            }
        });
    });
</script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Buat <b>JawalMu</b></h2>
                        <form method="POST">
                        <input class="search" type="text" name="cari" id="search" placeholder="Cari Aktivitas">
                        <button class="button" type="submit" name="search" id="tombol-cari">search</button>		
                        </form>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Rumah Sakit</span></a>					
					</div>
				</div>
			</div>
			<table class="table  table-hover">
				<thead>
					<tr>
						<th>Nama Aktivitas</th>
						<th>Keterangan</th>
                        <th>Tanggal</th>
						<th>Actions</th>
					</tr>
				</thead>
                <?php foreach ($result as $row){ ?>
				<tbody>
					<tr>
                    <!-- <?php $id=$row["activity_id"]; ?> -->
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["keterangan"]; ?></td>
                    <td><?php 
                    $date=date_create($row["tanggal"]);
                    echo date_format($date,"j F Y")  ?></td>
                    <!-- <td><?php echo $row["nama_city"] ?></td> -->
						<td>
							<a href="update.php?id=<?php echo $id; ?>"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="delete.php?id=<?php echo $id;?>" class="delete" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr> 
				</tbody>
                <?php }?>
			</table>
		</div>
	</div>        
</div>
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Tambah aktvitas</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Aktivitas</label>
						<input type="text" class="form-control" name="nama" required>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input type="text" class="form-control" name="alamat" required>
					</div>
                    <div class="form-group">
						<label>Date</label>
						<input type="date" class="form-control" name="alamat" required>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add" name="tambah">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>