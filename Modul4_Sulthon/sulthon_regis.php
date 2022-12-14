</head>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Modul 3</title>
	<style>
		label {
			display: block;
		}
	</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>
    <div class="clearfix">
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-6">
                <img src="fotomobil.jpg" style="width:750px;height:745px;">
            </div> 
            <div class="col-4 justify-content-center">
            <br><br><br>
                <b><h1><p class="fw-bold">Register</p></h1></b>
            <br>
            <div class="card-body">
                <form action="./sulthon_postregister.php" method="POST">
                <div class="mb-3" >
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Nomor Handphone</label>
                    <input type="text" class="form-control"  name="no_hp">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control"  name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Kata Sandi</label>
                    <input type="password" class="form-control"  name="Konfirmasi_password">
                </div>
                <br>
					<button class="btn btn-primary" type="submit" value="simpan" href="sulthon_login.php" name="daftar">Submit</button>
					<br>
				</div>
                <div>
                <br>
                    <a>Belum Punya Akun?</a><a href="sulthon_login.php">Login</a>
			    </div>
                </from>
            </div>  
        </div>
    </div>
</div>
</body>
</html>