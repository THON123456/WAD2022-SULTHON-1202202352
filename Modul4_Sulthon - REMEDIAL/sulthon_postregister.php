<?php
    include('sulthon_connector2.php');
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $query = mysqli_query($connect, "INSERT INTO users(email,nama,no_hp,password)VALUES('$email','$nama','$no_hp','$password')");
    if($query){
        echo"<script>alert('Data telah ditembahkan')</script>";
        echo"<meta http-equiv='refresh' content='1 url=login.php'>";
    }
    else{
        echo"<script>alert('gagal ditembahkan')</script>";
        echo"<meta http-equiv='refresh' content='1 url=login.php'>";

    }

    ?>