<!DOCTYPE html>
<html>

<head>

  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>EAD Rent</title>
    <!-- source -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
  </head>

<body>
  <nav class="navbar navbar-inverse">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Booking</a>
      </li>
    </ul>
  </nav>
  <center>
    <h1>WELCOME TO EAD RENT</h1>
  </center>

  <center><?php
echo "Find your best deal here!";
?></center>

<br><br>
<div class="">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="fotomobil.jpg" class="card-img-top" alt="rush">
                    <div class="card-body">
                        <h5 class="card-title">Isuzu Panther</h5>
                        <p>Rp. 700000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">7 Tempat Duduk</li>
                        <li class="list-group-item">2.499 cc</li>
                        <li class="list-group-item">Diesel Manual</li>
                    </ul>
                    <div class="card-body">
                      <form action="Fitrah_booking.php" method="post">
                        <button type="submit" class="btn btn-primary">Book Now</button>
                      </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="fotomobil2.jpg" class="card-img-top" alt="rush">
                    <div class="card-body">
                        <h5 class="card-title">Suzuki Ertiga</h5>
                        <p>Rp. 800000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">7 Tempat Duduk</li>
                        <li class="list-group-item">1.400 CC</li>
                        <li class="list-group-item">K15B Manual</li>
                    </ul>
                    <div class="card-body">
                      <form action="Fitrah_booking.php" method="post">
                        <button type="submit" class="btn btn-primary">Book Now</button>
                      </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="Fotomobil3.jpg" class="card-img-top" alt="rush">
                    <div class="card-body">
                        <h5 class="card-title">Honda Jazz</h5>
                        <p>Rp. 500000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">5 Tempat Duduk</li>
                        <li class="list-group-item">1.497 CC</li>
                        <li class="list-group-item">CVT Automatic</li>
                    </ul>
                    <div class="card-body">
                      <form action="Fitrah_booking.php" method="post">
                        <button type="submit" class="btn btn-primary">Book Now</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
     <!-- footer -->
     <footer>
          <div class="card-body">
               <p>Created by FITRAH_1202202352</p>
          </div>
     </footer>
  
</body>

</html>