<?php
session_start();
include '../main/conectDB.php';
if (isset($_SESSION['id'])) {
    $session_login_id = $_SESSION['id'];
    $session_login_email = $_SESSION['email'];
    $session_status = $_SESSION['status'];

    // เลือกตาราง calories ท้งหมด
    $sql = "SELECT * FROM menu WHERE user_id=$session_login_id ORDER BY time_update DESC";
    $result = mysqli_query($conn, $sql);

    // เลือกอันท้ายสุดของตาราง
    $sql2 = "SELECT * FROM menu ORDER BY user_id=$session_login_id DESC LIMIT 1;";
    // $sql2 = "SELECT * FROM menu WHERE user_id=$session_login_id ORDER BY time_update DESC LIMIT 1;";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_assoc()) {
        $title = $row2["title"];
        $Additional_explanation = $row2["Additional_explanation"];
    }
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
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-12">
                        <div class="card card-body mailbox">
                            <h5 class="card-title">Latest Update Food</h5>
                            <div class="message-center ps ps--theme_default ps--active-y" style="height: 490px" data-ps-id="a045fe3c-cb6e-028e-3a70-8d6ff0d7f6bd">
                                <div class="table-responsive m-t-20 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                            <tr>
                                                <th class="col-8" colspan="2">Food Name</th>
                                                <th class="col-4">time update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                                <tr>
                                                    <td><span class="round"><img src="../assets/images/users/2.jpg" alt="user" width="50"></span></td>
                                                    <td class="col-8">
                                                        <h6><?php echo $row["title"]; ?></h6><small class="text-muted">Project Manager</small>
                                                    </td>
                                                    <td id="timeupdate"><?php echo $row["time_update"]; ?></td>
                                                </tr>
                                            <?php $i++;
                                            } ?>
                                        </tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="up-img" style="background-image:url(../img/Fried-rice.jpg)"></div>
                            <div class="card-body">
                                <h5 class=" card-title">Latest update</h5>
                                <span class="label label-info label-rounded"><?php echo $title ?></span>
                                <p class="m-b-0 m-t-20"><?php echo $Additional_explanation ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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