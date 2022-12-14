<?php
    include('sulthon_connector2.php');

if (isset($_POST['daftar'])){    
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $query = mysqli_query($connect, "INSERT INTO user_sulthon(email,nama,no_hp,password) VALUES('$email','$nama','$no_hp','$password')");
    if($query){
        echo"<script>alert('Data telah ditembahkan')</script>";
        echo"<meta http-equiv='refresh' content='1 url=sulthon_login.php'>";
    }
    else{
        echo"<script>alert('gagal ditembahkan')</script>";
        echo"<meta http-equiv='refresh' content='1 url=sulthon_login.php'>";

    }
mysqli_query($connect,$query);
header('location:sulthon_login.php');    
}

    ?>