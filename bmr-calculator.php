<?php
 session_start();
 if (isset($_SESSION['id'])) {
  $session_login_id = $_SESSION['id'];
  $session_login_email = $_SESSION['email'];
  $session_login_status = $_SESSION['status'];
 }

?>

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
    <header class="masthead text-white text-center" style="background-image: url('img/exerside&food.jpg') ;">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">BMR Calculator</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="form-row input-group">
                        <!-- Button trigger modal -->
                        <div class="col-8 col-md-8 mb-2 mb-md-0 mt-2">
                            <input type="text" class="form-control mb-3" placeholder="ส่วนสูง / เซนติเมตร">
                            <input type="text" class="form-control mb-3" placeholder="น้ำหนัก / กิโลกรัม">
                            <input type="text" class="form-control mb-3" placeholder="อายุ / ปี">
                        </div>
                        <div class="col-4 col-md-4 mb-2 mb-md-0 mt-2 ">
                            <h3 style="font-size: medium !important">Minimum calories needed in daily life.</h3>
                            <h1 class="text-danger">1883</h1>
                            <h3 class="">Kilo calorie</h3>
                        </div>
                    </div>
                    <div class="form-row input-group">
                        <div class="col-12 col-md-12 mb-2 mb-md-0 mt-2 ">
                            <input type="submit" class="form-control btn btn-success btn-block" value="Calculate">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </header>



    <!-- Image Showcases -->
    <!-- <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-12 order-lg-1 showcase-text">
                    <h2 class="">Basal Metabolic Rate</h2>
                    <p class="lead">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; is the number of calories
                        required to keep your body functioning at rest. BMR is also known as your body’s metabolism; therefore,
                        any increase to your metabolic weight, such as exercise, will increase your BMR. To get your BMR,
                        simply input your height, gender, age and weight below. Once you’ve determined your BMR,
                        you can begin to monitor how many calories a day you need to maintain or lose weight.</p>
                </div>
            </div>
            <div class="container p-0">
                <h2 class="mb-4">Recommended food</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 m">
                                <img class="card-img-left" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE192Bm0TPrrqgm1FS8EatfrcV9AWYT_DklNf57fIAHUZrJFur&s" alt="Card image cap">
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 m">
                                <img class="card-img-left" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE192Bm0TPrrqgm1FS8EatfrcV9AWYT_DklNf57fIAHUZrJFur&s" alt="Card image cap">
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 m">
                                <img class="card-img-left" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE192Bm0TPrrqgm1FS8EatfrcV9AWYT_DklNf57fIAHUZrJFur&s" alt="Card image cap">
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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