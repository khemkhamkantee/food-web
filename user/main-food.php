<?php
session_start();
include '../main/connectAPI.php';
if (isset($_SESSION['id'])) {
    $session_login_id = $_SESSION['id'];
    $session_login_email = $_SESSION['email'];
    $session_login_username = $_SESSION['username'];
    $session_status = $_SESSION['status'];

    $url = 'menu-detail/user-id?username=cheasel&api_key=fe1913c8bddda7fbf1b050c92949ef887c97369bb965bc866bcbc9c15d65154e&id='.$session_login_id;
    $data = getAPI($url);
    $menudata = json_decode($data,true);
}else{
    header("Location: ../auth/login.php");
}
/*if (isset($_SESSION['id'])) {
    $session_login_id = $_SESSION['id'];
    $session_login_email = $_SESSION['email'];


    $sql = "SELECT * FROM menu WHERE user_id=$session_login_id";
    $result = mysqli_query($conn, $sql);
}*/
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
    <!--<link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">-->
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <!--<link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">-->
    <!--c3 CSS -->
    <!--<link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">-->

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!--<div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Sharing Thai Food</p>
        </div>
    </div>-->
    <div id="main-wrapper">
        <?php include("../function/header-user.php"); ?>
        <?php include("../function/list-user.php"); ?>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Your Recipe</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Your Recipe</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="add-main-food.php" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Add Food <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recipe</h4>
                                <h6 class="card-subtitle">Manage Recipe</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Food Name</th>
                                                <th>Calories (kcal)</th>
                                                <th>Create at</th>
                                                <th>Update at</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if ( $menudata != '' ) {
                                                foreach( $menudata as $result ){
                                                    #while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $result["title"]; ?></td>
                                                        <td><?php echo number_format((float)$result['nutrition']['calories']['quantity']/$result['serve'], 2, '.', ''); ?></td>
                                                        <td><?php echo date('m/d/Y H:i:s', (int) ((int)$result["date_add"]['$date'] / 1000)); ?></td>
                                                        <td><?php echo date('m/d/Y H:i:s', (int) ((int)$result["update"]['$date'] / 1000)); ?></td>
                                                        <td>
                                                            <a href="../main/edit-food.php?id=<?php echo $result["_id"]; ?>"><i class="fa fa-pencil-square-o text-success mr-3" style="font-size: 1.25rem;"></i></a>
                                                            <a href="../function/delete-food.php?id=<?php echo $result["_id"]; ?>"><i class="fa fa-trash-o text-danger" style="font-size: 1.25rem;"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php $i++;
                                                } 
                                            }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer" style="padding-top:1rem !important;padding-bottom:1rem !important">
                © 2020 Admin by sharing-thaifood.herokuapp.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
    </div>

    <!-- On top -->
    <div class="secondmenu text-right">
        <a href='#top' id="">
            <i class="fa fa-angle-up btn btn-block btn-lg " style="width: 50px; height: 43px;" aria-hidden="true"></i>
        </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../mainstyle/jquery/jquery.min.js"></script>
    <script src="../mainstyle/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!--<script src="../assets/node_modules/jquery/jquery.min.js"></script>-->
    <!-- Bootstrap popper Core JavaScript -->
    <!--<script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>-->
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
    <!--morris JavaScript -->
    <!--<script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>-->
    <!--c3 JavaScript -->
    <!--<script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>-->
    <!-- Chart JS -->
    <!--<script src="js/dashboard1.js"></script>-->

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