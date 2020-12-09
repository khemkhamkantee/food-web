<?php
session_start();
include 'main/conectDB.php';
if (isset($_SESSION['id'])) {
  $session_login_id = $_SESSION['id'];
  $session_login_email = $_SESSION['email'];
  $session_login_status = $_SESSION['status'];
}
#$idfood = $_GET['id'];

if ($idfood == "1") {
  $sqlmenu1 = "SELECT * FROM menu WHERE region='North Food'";
  $resultmenu1 = mysqli_query($conn, $sqlmenu1);
} elseif ($idfood == "2") {
  $sqlmenu1 = "SELECT * FROM menu WHERE region='South Food'";
  $resultmenu1 = mysqli_query($conn, $sqlmenu1);
} elseif ($idfood == "3") {
  $sqlmenu1 = "SELECT * FROM menu WHERE region='Northeast Food'";
  $resultmenu1 = mysqli_query($conn, $sqlmenu1);
} elseif ($idfood == "4") {
  $sqlmenu1 = "SELECT * FROM menu WHERE region='Central Region Food'";
  $resultmenu1 = mysqli_query($conn, $sqlmenu1);
} elseif ($idfood == "5") {
  $sqlmenu1 = "SELECT * FROM menu WHERE region='Other Food'";
  $resultmenu1 = mysqli_query($conn, $sqlmenu1);
}





?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-icon-api.png">

  <title>Sharing Thai Food</title>

  <!-- Bootstrap core CSS -->
  <link href="mainstyle/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="mainstyle/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="mainstyle/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">


  <link href="css/all.min.css" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <?php include("function/navigation.php"); ?>

  <!-- Masthead -->
  <?php include("function/search.php"); ?>

  <!-- Icons Grid -->
  <form action="show-manu.php" method="get">
    <section class="features-icons text-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="features-icons-item">
              <a href="show-manu.php?id=1">
                <div class="features-icons-icon">
                  <i class="fas fa-box-open m-auto text-primary"></i>
                </div>
              </a>
              <h3 style="font-size: larger !important">Northern Food</h3>
            </div>
          </div>
          <div class="col">
            <div class="features-icons-item">
              <a href="show-manu.php?id=2">
                <div class="features-icons-icon">

                  <i class="fas fa-box-open m-auto text-primary"></i>
                </div>
              </a>
              <h3 style="font-size: larger !important">Southern Food</h3>
            </div>
          </div>
          <div class="col">
            <div class="features-icons-item">
              <a href="show-manu.php?id=3">
                <div class="features-icons-icon">
                  <i class="fas fa-box-open m-auto text-primary"></i>
                </div>
              </a>
              <h3 style="font-size: larger !important">Northeastern Food</h3>
            </div>
          </div>
          <div class="col">
            <div class="features-icons-item">
              <a href="show-manu.php?id=4">
                <div class="features-icons-icon">
                  <i class="fas fa-box-open m-auto text-primary"></i>
                </div>
              </a>
              <h3 style="font-size: larger !important">Central Region Food</h3>
            </div>
          </div>
          <div class="col">
            <div class="features-icons-item">
              <a href="show-manu.php?id=5">
                <div class="features-icons-icon">
                  <i class="fas fa-box-open m-auto text-primary"></i>
                </div>
              </a>
              <h3 style="font-size: larger !important">Other Food</h3>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <br>

      <!-- Image Showcases -->
      <div class="container p-0 text-left">
        <h2 class="mb-4"><?php
                          if ($idfood == "1") {
                            echo "North Food";
                          } elseif ($idfood == "2") {
                            echo "South Food";
                          } elseif ($idfood == "3") {
                            echo "Northeast Food";
                          } elseif ($idfood == "4") {
                            echo "Central Region Food";
                          } elseif ($idfood == "5") {
                            echo "Other Food";
                          } ?>
        </h2>
        <!-- Start List Food -->

        <?php
        while ($rowmenu1 = mysqli_fetch_assoc($resultmenu1)) { ?>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-2 m">
                  <img class="card-img-left" src="image_food/<?php echo $rowmenu1["image"]; ?>" width="150" height="150" alt="Card image cap">
                </div>
                <div class="col-10">
                  <h5 class="card-title"><?php echo $rowmenu1["title"]; ?></h5>
                  <p class="card-text"><?php echo $rowmenu1["Additional_explanation"]; ?></p>
                  <p class="card-text"><small class="text-muted"><?php echo $rowmenu1["time_update"]; ?></small></p>
                  <div class="d-flex m-t-20">
                    <a class="link" href="show-food.php?id=<?= $rowmenu1["id"]; ?>">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        } ?>

        <!-- End List Food -->
      </div>
    </section>

  </form>



  <section class="">

  </section>

  <!-- BMR Calculator , Congenital disease , Food allergies -->
  <?php include("function/another-function.php"); ?>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center" style="background-image: url('http://www.healthyhome.asia/wp-content/uploads/2017/11/1-2-2.jpg') ;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Find your favorite food</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form action="#">
            <div class="form-row input-group">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" name="search" class="form-control form-control-lg" placeholder="Searching for...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Searching!</button>
                <a href='#top' id="">Go Top</a>
              </div>
            </div>
          </form>
        </div>
      </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



  <!-- On top -->
  <div class="secondmenu text-right">
    <a href='#top' id="">
      <i class="fa fa-angle-up btn btn-block btn-lg " style="width: 50px; height: 43px;" aria-hidden="true"></i>
    </a>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="mainstyle/jquery/jquery.min.js"></script>
  <script src="mainstyle/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    // On top
    $("a[href='#top']").click(function() {
      $("html, body").animate({
        scrollTop: 0
      }, "slow");
      return false;
    });
  </script>
</body>

</html>