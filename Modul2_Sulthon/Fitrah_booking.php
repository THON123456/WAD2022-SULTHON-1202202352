<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Booking</title>

     <link rel="stylesheet" href="assets/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
     <nav class="navbar navbar-expand-lg fixed-top justify-content-center" style="background-color: #f0f8ff !important;">
          <ul class="nav justify-content-center">
               <li class="nav-item">
                    <a class="nav-link active" href="Fitrah_home.php" href="#">Home</a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" style="border: solid black 1px; border-radius: 4px;" href="Fitrah_booking.php">Booking</a>
               </li>
          </ul>
     </nav>

     <div class="container">
          <h3 style="text-align: center; margin-bottom: 60px;">Rent your car now!</h3>
          <div class="row justify-content-evenly">
               <div class="col-6">
                    <div class="mobil-form">
                         <?php
                         if (array_key_exists("Isuzu Panther", $_POST)) {
                              echo '<img src="fotomobil.jpg" widht="200px" height="172px" alt="">';
                         } elseif (array_key_exists("hyundai", $_POST)) {
                              echo '<img src="fotomobil2.jpg" widht="200px" height="172px" alt="">';
                         } elseif (array_key_exists("toyota", $_POST)) {
                              echo '<img src="Fotomobil3.jpg" widht="200px" height="172px" alt="">';
                         } else {
                              echo '<img src="fotomobil2.jpg" widht="200px" height="172px" alt="">';
                         }
                         ?>
                    </div>
               </div>
               <div class="col-6">
                    <form action="Fitrah_Mybooking.php" method="POST">
                         <div>
                              <div class="mb-3">
                                   <label for="name" class="form-label">Name</label>
                                   <input type="text" class="form-control" name="FITRAH_1202202352" id="exampleFormControlInput1" value="FITRAH_1202202352" disabled>
                              </div>
                              <div class="mb-3">
                                   <label for="date" class="form-label">Book Date</label>
                                   <input type="date" class="form-control" name="date" id="exampleFormControlInput1">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleFormControlInput1" class="form-label">Start Time</label>
                                   <input type="time" class="form-control" name="start_time" id="exampleFormControlInput1">
                              </div>
                              <div class="mb-3">
                                   <label for="exampleFormControlInput1" class="form-label">Duration (Days)</label>
                                   <input type="number" class="form-control" name="duration" id="exampleFormControlInput1">
                              </div>
                              <div>
                                   <label for="">Pilih Mobil Rental</label>
                                   <select class="form-select" name="mobil" style="margin-bottom: 16px;" aria-label="Default select example">
                                        <?php
                                        if (array_key_exists("Isuzu Panther", $_POST)) {
                                             echo '<option value="default">Pilih Mobil</option>';
                                             echo '<option selected value="Isuzu Panther">Isuzu Panther</option>';
                                             echo '<option value="Suzuki Ertiga">Suzuki Ertiga</option>';
                                             echo '<option value="Honda Jazz">Honda Jazz</option>';
                                        } elseif (array_key_exists("hyundai", $_POST)) {
                                             echo '<option value="default">Pilih Mobil</option>';
                                             echo '<option value="Isuzu Panther">Isuzu Panther</option>';
                                             echo '<option selected value="Suzuki Ertiga">Suzuki Ertiga</option>';
                                             echo '<option value="Honda Jazz">Honda Jazz</option>';
                                        } elseif (array_key_exists("toyota", $_POST)) {
                                             echo '<option value="default">Pilih Mobil</option>';
                                             echo '<option value="Isuzu Panther">Isuzu Panther</option>';
                                             echo '<option value="Suzuki Ertiga">Suzuki Ertiga</option>';
                                             echo '<option selected value="Honda Jazz">Honda Jazz</option>';
                                        } else {
                                             echo '<option selected value="default">Pilih Mobil</option>';
                                             echo '<option value="Isuzu Panther">Isuzu Panther</option>';
                                             echo '<option value="Suzuki Ertiga">Suzuki Ertiga</option>';
                                             echo '<option value="Honda Jazz">Honda Jazz</option>';
                                        }
                                        ?>
                                   </select>
                              </div>
                              <div class="mb-3">
                                   <label for="number" class="form-label">Phone Number</label>
                                   <input type="text" class="form-control" name="phone" id="exampleFormControlInput1">
                              </div>
                              <label for="services" class="form-label">Add Services</label>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Health Protocol" name="service[]" id="flexCheckDefault">
                                   <label class="form-check-label" for="flexCheckDefault">
                                        Health Protocol / RP 400000
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" value="Driver" name="service[]" id="flexCheckDefault">
                                   <label class="form-check-label" for="flexCheckDefault">
                                        Driver / RP 250000
                                   </label>
                              </div>
                              <div class="form-check" style="margin-bottom: 16px;">
                                   <input class="form-check-input" type="checkbox" value="Fuel Filled" name="service[]" id="flexCheckDefault">
                                   <label class="form-check-label" for="flexCheckDefault">
                                        Fuel Filled / RP 300000
                                   </label>
                              </div>
                              <div class="d-grid gap-2">
                                   <button class="btn btn-primary" style="background-color: #7895B2; font-weight: bold; width: 550px !important;" type="submit">Book</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>

     <footer>
          <div class="card-body">
               <p>Created by Fitrah_1202202352</p>
          </div>
     </footer>
</body>

</html>