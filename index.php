<?php
 session_start();
 if (isset($_SESSION['id'])) {
  $session_login_id = $_SESSION['id'];
  $session_login_email = $_SESSION['email'];
  $session_login_status = $_SESSION['status'];
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
  <?php #include("function/search.php"); ?>

  <!-- Icons Grid -->
  <?php #include("function/region.php"); ?>
  

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 showcase-img" style="background-image: url('img/Northern-Food.jpg');">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 class="ml-5">Northern Food</h2>
          <p class="lead">Northern food is not popular with sugar. Sweetness can be obtained from ingredients that are
            used to make food, such as sweetness from vegetables from fish, fat will be obtained from animal oil. The
            animals that bring to cook are pork, chicken, and freshwater fish.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 showcase-img" style="background-image: url('img/Southern-Food.jpg');">
        </div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2 class="ml-5">Southern Food</h2>
          <p class="lead">Southern food generally has a spicy, salty, sweet taste from coconut milk. Salty seasonings
            can be obtained from shrimp paste, fish sauce, boiled water, sour taste from lime, bergamot, light mango,
            garcinia, color, southern food. Generally, the taste is spicy, salty, sweet from coconut milk. Salty
            seasonings can be obtained from shrimp paste, fish sauce, boiled water, sour taste, from lime, bergamot,
            light mango, garcinia, food color, will turn yellow from turmeric. Which is considered a unique addition to
            color Also smell And the fishy smell of this seafood is the main food The Southern food is spicy.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 showcase-img" style="background-image: url('img/Northeastern-Food.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 class="ml-5">Northeastern Food</h2>
          <p class="lead">Northeastern Thai food Most of the area is a plateau, consisting of mountain ranges with
            little woodwork, as well as wide fields. Suitable for raising animals Eating glutinous rice is the main
            flavor, salty, spicy and sour food, causing the food to be famous, namely papaya salad, spicy soup, bamboo
            shoots, sausage, sausage (liver water). Food preparation does not emphasize the color of the food or the
            style. The smell of food can be obtained from spices like other sectors. But it is popular to use basil
            leaves, dill, parsley, and phrao vegetables to be put in almost any food Curry foods are not popular with
            coconut milk.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 showcase-img" style="background-image: url('img/Central-Region-Food.jpg');">
        </div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2 class="ml-5">Central Region Food</h2>
          <p class="lead">The central region, which has a variety of flavors that do not focus on food that has a mellow
            taste that is mellow, sour, salty, sweet, spicy, according to the same food type. Herbal spices</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 showcase-img" style="background-image: url('img/Other-Food.jpg');">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 class="ml-5">Other Food</h2>
          <p class="lead">Other food that cannot be identified in which part of Thailand or international food.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- BMR Calculator , Congenital disease , Food allergies -->
  <?php include("function/another-function.php"); ?>


  <!-- Call to Action -->
  <section class="call-to-action text-white text-center" style="background-image: url('img/img-index.jpg') ;">
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