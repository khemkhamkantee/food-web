<?php
session_start();
include '../main/conectDB.php';
if (isset($_SESSION['id'])) {
    $session_login_id = $_SESSION['id'];
    $session_login_email = $_SESSION['email'];
    $sql = "SELECT * FROM user WHERE id=$session_login_id";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $gender = $row["gender"];
        $height = $row["height"];
        $weight = $row["weight"];
        $age = $row["age"];
    }
    // เลือกตาราง calories ท้งหมด
    $sql2 = "SELECT * FROM calories WHERE user_id=$session_login_id ORDER BY time_update DESC";
    $result2 = $conn->query($sql2);
    // เลือกอันท้ายสุดของตาราง
    $sql3 = "SELECT * FROM calories ORDER BY user_id=$session_login_id DESC LIMIT 1;";
    $result3 = $conn->query($sql3);
    while ($row3 = $result3->fetch_assoc()) {
        $calories_last = $row3["calories"];
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
                        <h3 class="text-themecolor">BMR Calculator</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">BMR Calculator</li>
                        </ol>
                    </div>

                </div>

                <form action="../main/processCal.php" method="POST" onsubmit="return Validate()" name="vform">
                    <input name="iduser" type="hidden" value="<?php echo $session_login_id ?>">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-8">
                            <div class="card">
                                <!-- Tab panes -->
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="col-md-12">gender</label>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="gender" value="male" id="male" <?php if ($gender == "male") { ?>checked <?php } ?>>
                                                    <label class="col-md-12" for="male">ชาย</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="gender" value="female" id="female" <?php if ($gender == "female") { ?>checked <?php } ?>>
                                                    <label class="col-md-12" for="female">หญิง</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">ส่วนสูง : เซนติเมตร</label>
                                        <div class="col-md-12">
                                            <input type="text" name="height" value="<?php echo $height;  ?>" placeholder="200" class="form-control form-control-line">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">น้ำหนัก : กิโลกรัม</label>
                                        <div class="col-md-12">
                                            <input type="text" name="weight" value="<?php echo $weight;  ?>" placeholder="600" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">อายุ</label>
                                        <div class="col-md-12">
                                            <input type="text" name="age" value="<?php echo $age;  ?>" placeholder="20" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Process</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <div class="m-b-30 no-block">
                                            <h6 class="card-title m-b-0 align-self-center">Minimum calories needed in daily life.</h6>
                                        </div>
                                    </center>
                                    <div style="height:290px; width:100%;">
                                        <center class="m-t-30">
                                            <span style="height: 250px; width: 250px; background-color: rgb(36, 210, 181); border-radius: 50%; display: inline-block;">

                                                <span style="margin-top: 12.5px; height: 225px; width: 225px; background-color: #FFFFFF; border-radius: 50%; display: inline-block;">
                                                    <br><br><br><br>
                                                    <h1 class="mt-2" style="font-size: 60px"><?php echo $calories_last;  ?></h1>
                                                    <h4>Kilo calories</h4>
                                                </span>
                                            </span>
                                        </center>
                                    </div>
                                    <center>
                                        <div class="m-b-30 no-block">
                                            <h6 class="card-title m-b-0 align-self-center text-danger">Latest calorie information.</h6>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Calories</h4>
                                <h6 class="card-subtitle">Show calories</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Calories</th>
                                                <th>Latest time</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            while ($row2 = $result2->fetch_assoc()) { ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $row2["calories"]; ?></td>
                                                    <td><?php
                                                        if ($row2["gender"] == "male") {
                                                            echo "ชาย";
                                                        } elseif ($row2["gender"] == "female") {
                                                            echo "หญิง";
                                                        } ?>
                                                    </td>
                                                    <td><?php echo $row2["time_update"]; ?></td>
                                                    <td>
                                                        <a href="../main/delete-calculator.php?id=<?= $row2["id"]; ?>"><i class="fa fa-trash-o text-danger" style="font-size: 1.25rem;"></i></a></td>
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
            </div>
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

    <script>
        // On top
        $("a[href='#top']").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
    </script>

    <script type="text/javascript">
        //GETTING ALL INPUT TEXT OPJECTS
        var height = document.forms["vform"]["height"];
        var weight = document.forms["vform"]["weight"];
        var age = document.forms["vform"]["age"];

        //SETTING ALL EVENT LISTENER
        height.addEventListener("click", heightVerify);
        weight.addEventListener("click", weightVerify);
        age.addEventListener("click", ageVerify);

        function Validate() {
            if (height.value == "") {
                height.style.border = "1px solid red";
                return false;
            }
            if (weight.value == "") {
                weight.style.border = "1px solid red";
                return false;
            }
            if (age.value == "") {
                age.style.border = "1px solid red";
                return false;
            }
        }

        function heightVerify() {
            if (height.value == "") {
                height.style.border = "";
                return true;
            }

        }

        function weightVerify() {
            if (weight.value == "") {
                weight.style.border = "";
                return true;
            }

        }

        function ageVerify() {
            if (age.value == "") {
                age.style.border = "";
                return true;
            }

        }
    </script>

</body>

</html>