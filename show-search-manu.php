<?php
session_start();
include 'main/conectDB.php';
if (isset($_SESSION['id'])) {
  $session_login_id = $_SESSION['id'];
  $session_login_email = $_SESSION['email'];
  $session_login_status = $_SESSION['status'];
}
echo $_POST['namefood_allergies1'];;

do {
  if (isset($_POST['namefood']) && !isset($_POST['medical_problems']) && !isset($_POST['checkfood_allergies'])) {
    $namefood = $_POST['namefood'];
    $sqlmenu = "SELECT * FROM menu WHERE title LIKE '$namefood%'";
    $resultmenu = $conn->query($sqlmenu);
    break;
  }
  // if (isset($_POST['medical_problems']) && !isset($_POST['namefood']) && !isset($_POST['checkfood_allergies'])) {
  //   // $medical_problems = $_POST['medical_problems'];
  // }
  if (isset($_POST['checkfood_allergies']) && !isset($_POST['namefood']) && !isset($_POST['medical_problems'])) {
    $namefood_allergies1 = $_POST['namefood_allergies1'];
    $sqlmenu2 = "SELECT * FROM menu";
    $resultmenu2 = $conn->query($sqlmenu2);
    $sqlmenufood_allergies = "SELECT * FROM ingredients WHERE name_ingredients LIKE '%$namefood_allergies1%'";
    $resultmenufood_allergies = $conn->query($sqlmenufood_allergies);
    break;
  }
} while (0);



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
        <h2 class="mb-4">Search from request.</h2>

        <!-- ค้นหาจากชื่ออาหาร -->
        <?php
        if (isset($_POST['namefood'])) {
          while ($rowmenu = $resultmenu->fetch_assoc()) { ?>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-2 m">
                    <img class="card-img-left" src="image_food/<?php echo $rowmenu["image"]; ?>" width="150" height="150" alt="Card image cap">
                  </div>
                  <div class="col-10">
                    <h5 class="card-title"><?php echo $rowmenu["title"]; ?></h5>
                    <p class="card-text"><?php echo $rowmenu["Additional_explanation"]; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $rowmenu["time_update"]; ?></small></p>
                    <div class="d-flex m-t-20">
                      <a class="link" href="show-food.php?id=<?php echo $rowmenu["id"]; ?>">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        } ?>

        <!-- ค้นหาจากวัตถุดิบที่แพ้ -->
        <?php
        if (isset($_POST['checkfood_allergies'])) {
          $test = array("143", "151", "154");
          $test2 = array();

          while ($rowfood_allergies = $resultmenufood_allergies->fetch_assoc()) {

            echo $temp = $rowfood_allergies["menu_id"] . $rowfood_allergies["name_ingredients"];
          }
          $row = $resultmenufood_allergies->fetch_array(MYSQLI_NUM);



          // $sqlmenufood_allergies = "SELECT * FROM ingredients WHERE name_ingredients LIKE '%$namefood_allergies1%'";
          // $resultmenufood_allergies = $conn->query($sqlmenufood_allergies);

          $sql = "SELECT menu_id, name_ingredients FROM ingredients WHERE name_ingredients LIKE '%$namefood_allergies1%' ORDER BY menu_id";
          $resultxxx = $conn->query($sqlmenufood_allergies);
          $row = $resultxxx->fetch_array(MYSQLI_NUM);

          printf("%s (%s)\n%s (%s)\n%s (%s)\n%s (%s)\n", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
          // $row = $resultxxx->fetch_array(MYSQLI_ASSOC);
          // printf("%s (%s)\n", $row["menu_id"], $row["name_ingredients"]);
          // echo $row[0];
          // echo $row[1];
          // echo $row[2];
        ?>




          <?php
          while ($rowmenu = $resultmenu2->fetch_assoc()) {
            // while ($rowfood_allergies = $resultmenufood_allergies->fetch_assoc()) {
            //   if ($rowmenu["id"] == $rowfood_allergies["menu_id"]) {
          ?>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-2 m">
                    <img class="card-img-left" src="image_food/<?php echo $rowmenu["image"]; ?>" width="150" height="150" alt="Card image cap">
                  </div>
                  <div class="col-10">
                    <h5 class="card-title"><?php echo $rowmenu["title"] . $rowmenu["id"]; ?></h5>
                    <p class="card-text"><?php echo $rowmenu["Additional_explanation"]; ?></p>
                    <p class="card-text"><small class="text-muted"><?php echo $rowmenu["time_update"]; ?></small></p>
                    <div class="d-flex m-t-20">
                      <a class="link" href="show-food.php?id=<?php echo $rowmenu["id"]; ?>">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php
            //   }
            // }
          }
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