<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCar Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link" aria-current="page" href="sulthon_home.php" style=" padding-left: 70px;">Home</a>
=======
                <a class="nav-link" aria-current="page" href="RIZKI_HOME.php" style=" padding-left: 70px;">Home</a>
>>>>>>> 1d94723a0d6b510600d068e4cc55ffecb6b73f54
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="ListCar.php" style="color: white; padding-left:30px;">MyCar</a>
              </li>
            </ul>
          </div>
        <a href="sulthon_myitem.php" class="btn me-md-2" style="width: 110px; background-color: white; color:blue; font-weight: 600;">Add Car</a>
            

        </div>
    </nav>

    <div class="mobil" style="margin: 100px 100px;">
        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->

        <h3><b>My Show Room</b></h3>
        <p>List Show Room MUHAMMAD FITRAH SULTHON_1202204171</p>

        <div  class="row justify-content-left">

            <?php
                include 'sulthon_connector.php';
                $query = "SELECT * FROM showroom_sulthon_table ORDER BY id_mobil";
                $toni = $connect->prepare($query);
                $toni->execute();
                $res1 = $toni->get_result();
                while ($row = $res1->fetch_assoc()) {
                $id_mobil = $row["id_mobil"];
                $foto = $row["foto_mobil"];
                $nama_mobil = $row['nama_mobil'];
                $deskripsi = $row["deskripsi"];
            
            ?>

            <div class="col-5 " style="padding-top: 30px; margin-left: 0; margin-right: 15px; ">
                <div class="card shadow p-1 bg-white rounded" style="width: 23rem; border-radius: 20px; border-style: none;">
                    <div style="margin: 15px 15px; border-radius : 20px;">
                        <?= "<img src='../asset/images/$foto'width='330' height='230'/>"; ?>
                    </div>
                    <div class="card-body">
                        <h5><?= $nama_mobil; var_dump($id_mobil);?></h5>
                        <p class="card-text" ><?= $deskripsi; ?></p>
                        <a href=".php" class="btn btn-primary" style="border-radius: 50px; width: 140px;">Detail</a>
                        <a href="../config/delete.php" class="btn btn-danger" style="border-radius: 50px; width: 140px; margin-left: 20px;">Delete</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>

        </div>

        <h6 style="margin-top: 60px;"><?php 
        // $sql    = $connect, "SELECT * FROM showroom_sulthon_table";
        $query  = mysqli_query($connect, "SELECT * FROM showroom_sulthon_table");
        $count  = mysqli_num_rows($query);
        echo "Jumlah mobil: $count";?></h6>

        
        
   

    </div>


</body>
</html>