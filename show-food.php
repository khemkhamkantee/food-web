<?php
session_start();
include 'main/conectDB.php';
if (isset($_SESSION['id'])) {
    $session_login_id = $_SESSION['id'];
    $session_login_email = $_SESSION['email'];
    $session_login_status = $_SESSION['status'];
}
$idfood = $_GET['id'];
// $sqlmenu = "SELECT * FROM menu INNER JOIN ingredients ON menu.id=ingredients.menu_id INNER JOIN preparation ON menu.id=preparation.menu_id";
$sqlmenu = "SELECT * FROM menu WHERE id=$idfood";
$resultmenu = mysqli_query($conn, $sqlmenu);

$resultmenu2 = mysqli_query($conn, $sqlmenu);
while ($menu = mysqli_fetch_assoc($resultmenu2)) {
    $idmenu = $menu["id"];
}

$sqlingredients = "SELECT * FROM ingredients WHERE menu_id=$idmenu";
$resultingredients = mysqli_query($conn, $sqlingredients);

$sqlpreparation = "SELECT * FROM preparation WHERE menu_id=$idmenu";
$resultpreparation = mysqli_query($conn, $sqlpreparation);





// $sqlingredients = "SELECT * FROM ingredients WHERE user_id=$idmenu";
// $resultingredients = mysqli_query($conn, $sqlingredients);
// $sqlpreparation = "SELECT * FROM preparation WHERE user_id=$idmenu";
// $resultpreparation = mysqli_query($conn, $sqlpreparation);

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
        <?php include("function/region.php"); ?>

    </form>



    <section class="container">
        <?php
        while ($rowmenu = mysqli_fetch_assoc($resultmenu)) { ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 m">
                            <center>
                                <img class="card-img-left" src="image_food/<?php echo $rowmenu["image"]; ?>"  width="250" height="250" alt="Card image cap">
                            </center>
                        </div>
                        <div class="col-8">
                            <h5 class="card-title"><?php echo $rowmenu["title"]; ?></h5>
                            <p class="card-text"><?php echo $rowmenu["Additional_explanation"]; ?></p>
                            <br>
                            <h5 class="card-title">วัตถุดิบ</h5>
                            <?php while ($rowingredients = mysqli_fetch_assoc($resultingredients)) { ?>
                                <div class="row">
                                    <div class="col-8">
                                        <p> <?php echo $rowingredients["name_ingredients"]; ?></p>
                                    </div>
                                    <div class="col-2">
                                        <p class="ml-5"><?php echo $rowingredients["value"]; ?></p>
                                    </div>
                                    <div class="col-2">
                                        <p><?php echo $rowingredients["unit"]; ?></p>
                                    </div>
                                </div>

                            <?php
                            } ?>
                            <br>
                            <h5 class="card-title">ขั้นตอนการทำ</h5>
                            <?php 
                            $i=1;
                            while ($rowpreparation = mysqli_fetch_assoc($resultpreparation)) { ?>
                                <div class="row">
                                    <div class="col-1"><p><?php echo $i; ?>.</p></div>
                                    <div class="col-11">
                                        <p> <?php echo $rowpreparation["preparation"]; ?></p>
                                    </div>
                                </div>

                            <?php $i++;
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } ?>

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