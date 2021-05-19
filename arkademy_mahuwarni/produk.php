<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Produk</title>
	<link href="asset/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<script src="asset/script.js"></script>

	<style type="text/css">
	#container {
      margin: 10px;
      border: 1px solid #D0D0D0;
      box-shadow: 0 0 8px #D0D0D0;
    }

    #form {
      margin: 2%;
    }

    #header {
      background-color: #4d0066;
      color: white;
      text-align: center;
      font-size: 32px;
      height: 50px;
      border: 1px solid;

    }
    .otn {
      margin: 9px;
    }
</style>
</head>

<body>

<div id="header">
		Data Produk
	</div>

<!-------------------- MODAL INSERT ---------------------->

	<div class="otn">

    	<button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#input">Input</button>

  	</div>
  	  	<div class="modal fa" id="input" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Data Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="input_produk.php" method="post">
          <div class="modal-body">

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">ID </label>
              <input type="text" class="form-control" id="recipient-name" name="id_produk">
            </div>

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama Produk</label>
              <input type="text" class="form-control" id="recipient-name" name="nama_produk">
            </div>


            <div class="form-group">
              <label for="message-text" class="col-form-label">Keterangan</label>
              <input type="text" class="form-control" id="message-text" name="keterangan"></textarea>
            </div>

            <div class="form-group">
              <label for="message-text" class="col-form-label">Harga </label><br>
              <input type="text" name="harga">

            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Jumlah </label><br>
              <input type="text" name="jumlah">

            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-outline-primary" value="save changes">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-------------------- MODAL INSERT ---------------------->
<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead style="text-align: center;">
			<tr>
				
			<th>Id Produk</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Action</th>

			</tr>
		</thead>
		<tfoot style="text-align: center;">
			<tr>
				
			<th>Id Produk</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Action</th>

			</tr>
		</tfoot>
		<tbody style="text-align: center;">
			
			<?php 
			include "koneksi.php";

			$query_mysql = mysqli_query($koneksi, "SELECT * FROM produk") or die(mysql_error());
			while ($data = mysqli_fetch_assoc($query_mysql)) {?>

			<tr align="center">
				<td><?php echo $data['id_produk']; ?></td>
				<td><?php echo $data['nama_produk']; ?></td>
				<td><?php echo $data['keterangan']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
				<td><?php echo $data['harga']; ?></td>

				<td>
					<a href="edit.php?p=<?php echo $data['id_produk'];?>">
						<input type="button" class="btn btn-outline-success" value="Edit">
					</a>
					<a href=" hapus.php?no=<?php echo $data['id_produk']; ?>">
						<input type="button" class="btn btn-outline-danger" value="Hapus">
					</a>
				</td>

			</tr>
			<?php } ?>
		</tbody>


	</table>
</div>



	
</body>
</html>