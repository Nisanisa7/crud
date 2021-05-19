<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title><link href="asset/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<script src="asset/script.js"></script>
<style>

body{
	background-color: #d078ff;
}
.container{
	padding-top: 35px;
	padding-left: 300px;
}
.card{
	width: 30rem;
	
}

</style>
</head>


<body>

	<?php 
	include "koneksi.php";

	$id_produk = $_GET['p'];

	$query_mysql= mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$id_produk'") or die(mysql_error());

	while ($data = mysqli_fetch_array($query_mysql)){
	 ?>
<div class="container">
	<div class="card">
		<div class="card-header">
    		Edit Produk
 		 </div>
  <div class="card-body">
	<form action="update_produk.php" method="post">
 	 <div class="form-group">
	    <label for="exampleInputEmail1">ID Produk</label>
	    <input type="text" readonly value="<?php echo $data['id_produk'] ?>" name="id_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"S">
  	</div>

 	<div class="form-group">
	    <label for="exampleInputEmail1">Nama Produk</label>
	    <input type="text" value="<?php echo $data['nama_produk'] ?>" name="nama_produk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  	</div>  

 	<div class="form-group">
	    <label for="exampleInputEmail1">Keterangan</label>
	    <input type="text" value="<?php echo $data['keterangan'] ?>" name="keterangan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  	</div> 

  	<div class="form-group">
	    <label for="exampleInputEmail1">Jumlah</label>
	    <input type="text" value="<?php echo $data['jumlah'] ?>" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  	</div> 

  	<div class="form-group">
	    <label for="exampleInputEmail1">Harga</label>
	    <input type="text" value="<?php echo $data['harga'] ?>" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  	</div> 

<div class="text-right">

<a href="produk.php">
  <button type="button" class="btn btn-outline-secondary">Close</button>
   </a>
  
  <input type="submit" class="btn btn-outline-primary" value="update">

</div>
</form>
<?php } ?>
  </div>

	</div>
</div>

</body>
</html>