<?php
session_start();
if (isset($_SESSION['id'])) {
    $session_login_id = $_SESSION['id'];
    $session_login_email = $_SESSION['email'];
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
    <link href="../mainstyle/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../mainstyle/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../mainstyle/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/landing-page.min.css" rel="stylesheet">

    <link href="../css/all.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Sharing Thai Food</p>
        </div>
    </div>
    <div id="main-wrapper">
        <?php include("../function/header-user.php"); ?>
        <?php include("../function/list-user.php"); ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Add Food allergies</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">HOME</a></li>
                            <li class="breadcrumb-item">Food allergies</li>
                            <li class="breadcrumb-item active">Add Food allergies</li>
                        </ol>
                    </div>
                </div>
                <form action="../main/add-food-allergies.php" method="POST" class="form-horizontal form-material" name="form1" runat="server">
                    <input name="iduser" type="hidden" value="<?php echo $session_login_id ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <!-- Tab panes -->
                                <div class="card-body">

                                    <div class="form-group">
                                        <label class="col-md-12">Food allergies</label>
                                        <div class="row ml-1 mr-1 mt-3">
                                            <!-- <div class="col-md-1" id="number">
                                                <input type="text" name="value" value="1" class="form-control form-control-line" disabled>
                                            </div> -->
                                            <div class="col-md-11 mb-4" id="process">
                                                <input type="text" name="food_allergies" placeholder="Food allergies " class="form-control form-control-line">
                                            </div>
                                            <!-- <button href="" onclick="AddFoodallergies()" id="get" type="button" class="btn btn-danger btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i></button> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <center>
                                            <button type="submit" class="btn btn-success btn-block">Add Food allergies</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <footer class="footer" style="padding-top:1rem !important;padding-bottom:1rem !important">
                © 2020 Admin by sharing-thaifood.herokuapp.com
            </footer>
        </div>
    </div>

    <!-- On top -->
    <div class="secondmenu text-right">
        <a href='#top' id="">
            <i class="fa fa-angle-up btn btn-block btn-lg " style="width: 50px; height: 43px;" aria-hidden="true"></i>
        </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="mainstyle/jquery/jquery.min.js"></script>
    <script src="mainstyle/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>

    <!-- <script>
        var newvalue = 1;

        function AddFoodallergies() {

            newvalue++;
            var number = '';
            var process = '';
            number += '<input type="text" name="value" value="' + newvalue + '" class="form-control form-control-line" disabled>';
            $("#number").append(number);
            process += ' <input type="text" placeholder="Congenital disease " class="form-control form-control-line">';
            $("#process").append(process);
        }
        // On top
        $("a[href='#top']").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    </script> -->

</body>

</html>