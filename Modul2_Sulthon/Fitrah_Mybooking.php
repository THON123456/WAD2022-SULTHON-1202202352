<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>My Booking</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/style.css">
</head>

<body>
     <nav class="navbar navbar-expand-lg fixed-top justify-content-center" style="background-color: #f0f8ff !important;">
          <ul class="nav justify-content-center">
               <li class="nav-item">
                    <a class="nav-link" href="Fitrah_home.php">Home</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="Fitrah_booking.php">Booking</a>
               </li>
          </ul>
     </nav>

     <?php
     $date = $_COOKIE['date'];
     $start_time = $_COOKIE['start_time'];
     $duration = $_COOKIE['duration'];
     $mobil = $_COOKIE['mobil'];
     $phone = $_POST['phone'];
     $service = $_POST['service'];
     $total_price = 0;

     // total Mobil
     if ($mobil == 'Isuzu Panther') {
          $total_price += (int)$duration * 700000;
     } else if ($mobil == 'Suzuki Ertiga') {
          $total_price += (int)$duration * 800000;
     } else if ($mobil == 'Honda Jazz') {
          $total_price += (int)$duration * 500000;
     }
     ?>

     <div style="padding-top: 80px;">
          <h3 style="font-weight: bold; text-align: center; margin: 40px 0 20px 0;">Thank You FITRAH_1202202352</h3>
          <p style="text-align: center;">Please double check your reservation</p>
     </div>

     <div class="mobil">
          <table class="table">
               <thead>
                    <tr>
                         <th scope="col">Booking Number</th>
                         <th scope="col">Name</th>
                         <th scope="col">Check In</th>
                         <th scope="col">Check Out</th>
                         <th scope="col">Car Type</th>
                         <th scope="col">Phone Number</th>
                         <th scope="col">Service(s)</th>
                         <th scope="col">Total Price</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <th><?php echo (rand()) ?></th>
                         <td><?php echo "Fitrah_1202202352" ?></td>
                         <td><?php echo $date . " " . $start_time ?></td>
                         <td><?php echo date('Y-m-d', strtotime($date . "+ $duration days")) . " " . $start_time; ?></td>
                         <td><?php echo $mobil ?></td>
                         <td><?php echo $phone ?></td>
                         <td><?php
                              // total service
                              if (isset($service)) {
                                   foreach ($service as $i) {
                                        echo "<li> $i </li>";
                                        if ($i == "Health Protocol") {
                                             $total_price += 400000;
                                        } elseif ($i == "Driver") {
                                             $total_price += 250000;
                                        } elseif ($i == "Fuel Filled") {
                                             $total_price += 300000;
                                        }
                                   }
                              } else {
                                   echo "no service";
                              } ?></td>
                         <td><?php echo "Rp. $total_price" ?></td>
                    </tr>
               </tbody>
          </table>
     </div>

     <div class="d-grid gap-2" style="display: flex; justify-content: center; margin: 100px 0 56px 0;">
          <button class="btn btn-primary" style="width: 500px !important;" type="button"><a href="Fitrah_booking.php" style="color: aliceblue; text-decoration: none; width:100%;">Back</a></button>
     </div>

     <footer>
          <div class="card-body">
               <p>Created by Fitrah_1202202352</p>
          </div>
     </footer>
</body>

</html>