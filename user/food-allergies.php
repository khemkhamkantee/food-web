<?php
session_start();
include '../main/conectDB.php';
if (isset($_SESSION['id'])) {
    $session_login_id = $_SESSION['id'];
    $session_login_email = $_SESSION['email'];
}

$sql = "SELECT * FROM food_allergies WHERE user_id=$session_login_id";
$result = $conn->query($sql);
$result2 = $conn->query($sql);
$result3 = $conn->query($sql);
$result4 = $conn->query($sql);
$result5 = $conn->query($sql);
$result6 = $conn->query($sql);
$result7 = $conn->query($sql);
$result8 = $conn->query($sql);
$result9 = $conn->query($sql);


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
                        <h3 class="text-themecolor">Food allergies</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Food allergies</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="add-food-allergies.php" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">Add Food allergies <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="d-flex m-b-30 no-block">
                                        <div class="ml-auto" id="process">
                                            <select class="custom-select b-0" name="process">
                                                <option selected="">Food allergies</option>
                                                <?php while ($row2 = $result2->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row2["tb_food_allergies"]; ?>"><?php echo $row2["tb_food_allergies"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="ml-auto" id="process2">
                                            <select class="custom-select b-0" name="process2">
                                                <option selected="">Food allergies</option>
                                                <?php while ($row3 = $result3->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row3["tb_food_allergies"]; ?>"><?php echo $row3["tb_food_allergies"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="ml-auto" id="process3">
                                            <select class="custom-select b-0" name="process3">
                                                <option selected="">Food allergies</option>
                                                <?php while ($row4 = $result4->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row4["tb_food_allergies"]; ?>"><?php echo $row4["tb_food_allergies"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="ml-auto" id="process4">
                                            <select class="custom-select b-0" name="process4">
                                                <option selected="">Food allergies</option>
                                                <?php while ($row5 = $result5->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row5["tb_food_allergies"]; ?>"><?php echo $row5["tb_food_allergies"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="ml-auto" id="process">
                                            <select class="custom-select b-0" name="process5">
                                                <option selected="">Food allergies</option>
                                                <?php while ($row6 = $result6->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row6["tb_food_allergies"]; ?>"><?php echo $row6["tb_food_allergies"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="ml-auto" id="process">
                                            <select class="custom-select b-0" name="process6">
                                                <option selected="">Food allergies</option>
                                                <?php while ($row7 = $result7->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row7["tb_food_allergies"]; ?>"><?php echo $row7["tb_food_allergies"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="ml-auto" id="process">
                                            <select class="custom-select b-0" name="process7">
                                                <option selected="">Food allergies</option>
                                                <?php while ($row8 = $result8->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row8["tb_food_allergies"]; ?>"><?php echo $row8["tb_food_allergies"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="ml-auto" id="process">
                                            <select class="custom-select b-0" name="process8">
                                                <option selected="">Food allergies</option>
                                                <?php while ($row9 = $result9->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row9["tb_food_allergies"]; ?>"><?php echo $row9["tb_food_allergies"]; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <!-- <button href="" onclick="userFoodallergies()" id="get" type="button" class="btn btn-danger"><i class="fa fa-plus-circle" aria-hidden="true"></i></button> -->
                                        <button href="" type="submit" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i></button>

                                    </div>
                                </form>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Food allergies</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            while ($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $row["tb_food_allergies"]; ?></td>
                                                    <td>
                                                        <a href=""><i class="fa fa-eye text-success ml-3 mr-3" style="font-size: 1.25rem;"></i></a>
                                                        <a href="../main/delete-food-allergies.php?id=<?= $row["id"]; ?>"><i class="fa fa-trash-o text-danger" style="font-size: 1.25rem;"></i></a>
                                                    </td>
                                                </tr>
                                            <?php $i++;
                                            } ?>
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
        function userFoodallergies() {
            var process = '';
            var process2 = '';
            var process3 = '';
            process += ' <select class="custom-select b-0"><option selected="">ถั่ว</option><option value="1">นม</option><option value="1">ส้ม</option></select>';
            $("#process").append(process);
            process2 += ' <select class="custom-select b-0"><option selected="">ถั่ว</option><option value="1">นม</option><option value="1">ส้ม</option></select>';
            $("#process2").append(process2);
            process3 += ' <select class="custom-select b-0"><option selected="">ถั่ว</option><option value="1">นม</option><option value="1">ส้ม</option></select>';
            $("#process3").append(process3);
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