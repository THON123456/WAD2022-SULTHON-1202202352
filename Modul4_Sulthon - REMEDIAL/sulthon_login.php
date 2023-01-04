<?php 
 
include 'sulthon_connector2.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: sulthon_home.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>

	<?php if (isset($error)) :?>

		<p style="color: red; font-style: italic;">Email / password salah!</p>
	<?php endif; ?>
    <div class="clearfix">
            <div class="row">
                <div class="col-6">
                    <img src="fotomobil.jpg" style="width:750px;height:745px;">
                </div> 
                <div class="col-4 justify-content-center">
                <br><br><br><br><br><br><br>
                    <b><h1><p class="fw-bold">Login</p></h1></b>
                <br>
                <div class="card-body">
                    <form action="sulthon_home.php" method="POST">
                    <div class="mb-3" >
                        <label class="form-label">Email</label> 
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" checked>
                        <label class="form-check-label">Remember me</label>
                    </div>
                    </div>
                    <br>
                        <button class="btn btn-primary" type="submit" value="simpan">Login</button>
                        <br><br>
                        <a>Anda belum punya akun?</a><a href="sulthon_regis.php">Daftar</a>
                    </div>
                    </from>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>