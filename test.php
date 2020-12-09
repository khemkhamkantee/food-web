<?php
    include '../main/connectAPI.php';
    $url = 'menu-detail/menu-id?username=cheasel&api_key=fe1913c8bddda7fbf1b050c92949ef887c97369bb965bc866bcbc9c15d65154e&id='.$_GET['id'];
    $resultmenu = json_decode(getAPI($url),true);
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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">

    <link href="css/show-food.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <?php include("function/navigation.php"); ?>

    <!-- Masthead -->
    <?php #include("function/search.php"); ?>

    <!-- Icons Grid -->
    <form action="show-manu.php" method="get">
        <?php #include("function/region.php"); ?>

    </form>

    <section class="container">
        <div class="row">
            <div class="col-9" >
                <div class="card" style="padding-top: 20px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 m">
                                <center>
                                    <img class="card-img-left"
                                        src="<?php echo $resultmenu[0]['image']; ?>"
                                        width="250" height="250" alt="Card image cap">
                                </center>
                            </div>
                            <div class="col-8">
                                <h5 class="card-title"><?php echo $resultmenu[0]['title']; ?></h5>
                                <p class="card-text"><?php 
                                    if( isset($resultmenu[0]["description"]) ){
                                        echo $resultmenu[0]["description"];
                                    }else{
                                        echo '';
                                    } 
                                ?></p>
                                <br>
                                <h5 class="card-title">วัตถุดิบ</h5>
                                <?php 
                                    echo '<div class="row">';
                                    foreach($resultmenu[0]['ingredients'] as $ing){
                                        echo '<div class="col-7">';
                                        echo '<p>'. $ing['name'] .'</p>';
                                        echo '</div>';
                                        echo '<div class="col-3" style="text-align:right;">';
                                        echo '<p class="ml-5">'. $ing['value'] .'</p>';
                                        echo '</div>';
                                        echo '<div class="col-2" style="text-align:right;">';
                                        echo '<p>'. $ing['unit'] .'</p>';
                                        echo '</div>';
                                    }
                                    echo '</div>';
                                ?>

                                <br>
                                <h5 class="card-title">ขั้นตอนการทำ</h5>
                                
                                <?php 
                                    $num = 1;
                                    echo '<div class="row">';
                                    foreach($resultmenu[0]['preparations'] as $ing){
                                        echo '<div class="col-1">';
                                        echo '<p>'. $num .'</p>';
                                        echo '</div>';
                                        echo '<div class="col-11" style="text-align:left;padding:0;margin-left:0;">';
                                        echo '<p style="margin-left:5px;padding:0;">'. $ing .'</p>';
                                        echo '</div>';
                                        $num++;
                                    }
                                    echo '</div>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">อาหารแนะนำ</h5>
                        </center>
                        <div class="row">
                            <div class="col"><img class="card-img-left"
                                    src="https://image.freepik.com/free-vector/good-food-logo-template_79169-17.jpg"
                                    width="100" height="100" alt="Card image cap">
                            </div>

                            <div class="col">บลาบลาบลาบลาบลาบลา<a class="link" href="show-food.php?id=<?= $rowmenu1["id"]; ?>">Read more</a></div>
                        </div>
                        <div class="row">
                            <div class="col"><img class="card-img-left"
                                    src="https://image.freepik.com/free-vector/good-food-logo-template_79169-17.jpg"
                                    width="100" height="100" alt="Card image cap">
                            </div>

                            <div class="col">บลาบลาบลาบลาบลาบลา<a class="link" href="show-food.php?id=<?= $rowmenu1["id"]; ?>">Read more</a></div>
                        </div>   <div class="row">
                            <div class="col"><img class="card-img-left"
                                    src="https://image.freepik.com/free-vector/good-food-logo-template_79169-17.jpg"
                                    width="100" height="100" alt="Card image cap">
                            </div>

                            <div class="col">บลาบลาบลาบลาบลาบลา<a class="link" href="show-food.php?id=<?= $rowmenu1["id"]; ?>">Read more</a></div>
                        </div>   <div class="row">
                            <div class="col"><img class="card-img-left"
                                    src="https://image.freepik.com/free-vector/good-food-logo-template_79169-17.jpg"
                                    width="100" height="100" alt="Card image cap">
                            </div>

                            <div class="col">บลาบลาบลาบลาบลาบลา<a class="link" href="show-food.php?id=<?= $rowmenu1["id"]; ?>">Read more</a></div>
                        </div>





                    </div>
                </div>
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
        $("a[href='#top']").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    </script>
</body>

</html>