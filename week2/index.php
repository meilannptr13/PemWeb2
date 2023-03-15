<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<h2 class="text-center mt-5">Belanja Online</h2>
    <div class="container mt-5"><hr>
	<div class="row">
		<div class="col-md-8">
<form method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Ketikkan disini" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Ketikkan disini" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row mt-5">
    <div class="offset-4 col-5">
      <button name="submit" type="submit" class="btn btn-primary col-md-3">Simpan</button>
    </div>
  </div>
</form>		</div>
		<div class="col-md-4">
			<div class="card">
				<h5 class="card-header text-uppercase bg-primary text-light text-center">
					Daftar Harga
				</h5>
				<div class="card-body">
					<p class="card-text">
						TV : Rp. 4.200.000
					</p>
					<p class="card-text">
						Kulkas : Rp. 3.000.000
					</p>
					<p class="card-text">
						Mesin cuci : Rp. 3.800.000
					</p>
				</div>
				<h6 class="card-header text-uppercase bg-primary text-light text-center">
					Harga dapat berubah setiap saat
                </h6>
			</div>
		</div>
	</div>
	<hr>
    <?php require_once "form_belanja.php"; ?>
                <tr class="text-center">
                    <th>Customer <td>:  <?= $nama; ?></td></th>
                    <br>
                    <th>Produk <td>:  <?= $produk; ?></td></th>
                    <br>
                    <th>Jumlah<td>:  <?= $jumlah; ?></td></th>
                    <br>
                    <th>Total Harga<td>:  <?= number_format($jumlah_harga);?></td></th>
                 </tr>
			</table>
		</div>
	 

</body>
</html>