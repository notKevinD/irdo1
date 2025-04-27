<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About</title>
  <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
  <?php
  $activePage = 'tentang';
  include 'komponen/navbar.php';
  ?>


  <div class="container bg-body pb-3" style="padding-top: 120px;">
    <div class="container bg-body p-3">
      <h1 class="text-center pb-5">About</h1>
      <img src="img/logo_irdo.png" alt="Logo" class="img-fluid w-100 p-5">
      <p style="text-align: justify;">The rapid advancement of technology, particularly in the field of robotics, plays
        a crucial role across various sectors. As a result, understanding and applying robotics technology from an early
        age has become an urgent necessity. Robotics education helps the younger generation develop critical, logical,
        and creative thinking skills to face future challenges.

      </p>
      <p style="text-align: justify;">The INTERNATIONAL ROBOT DESIGN OLYMPIAD (IRDO) 2025 is a prestigious robotics
        competition held at the national level for school students and at the international level for university
        students. This event aims to enhance participants’ abilities in designing and operating robots, while also
        serving as a platform for collaboration and technological innovation.


      </p>

      <p style="text-align: justify;">The International Robot Design Olympiad 2025 features three (3) competition
        divisions:
      </p>
      <ol>
        <li>Creative Robot Competition (Elementary, Junior High, Senior High School)
        </li>
        <li>Capstone Project Competition (University Students)</li>
      </ol>

      <div class="container-fluid bg-body">
        <div class="container text-center bg-body pb-3">

          <div class="row pt-3 d-flex justify-content-center">




            <div class="col-md-4 d-flex justify-content-center align-items-center my-3 card12">
              <div class="row">
                <img src="img/Galeri/lombaRobotCreative2.JPG" class="card-img-top" alt="Gambar Galeri">
                <p>Creative Robot Competition</p>
              </div>
            </div>



            <div class="col-md-4 d-flex justify-content-center align-items-center my-3 card12">
              <div class="row">
                <img src="img/Galeri/lombaRobotCreative.JPG" class="card-img-top" alt="Gambar Galeri">
                <p>Capstone Project Competition</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'komponen/footer.php';
  ?>


</body>

</html>