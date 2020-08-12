<?php
session_start();
include '../main/conectDB.php';
if (isset($_SESSION['id'])) {
    $session_login_id = $_SESSION['id'];
    $session_login_email = $_SESSION['email'];
    $session_login_password = $_SESSION['password'];
    $sql = "SELECT * FROM user WHERE id=$session_login_id";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $fileimage = $row["fileimage"];
        $fristname = $row["fristname"];
        $lastname = $row["lastname"];
        $age = $row["age"];
        $gender = $row["gender"];
        $height = $row["height"];
        $weight = $row["weight"];
        $phonenumber = $row["phonenumber"];
        $message = $row["message"];
        $country = $row["country"];
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
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Profile <?php echo $fileimage; ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>

                <form action="../main/update-profile.php" enctype="multipart/form-data" class="form-horizontal form-material" method="POST" onsubmit="return Validate()" name="vform">
                    <div class="row">
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <center class="m-t-30">>
                                        <label for="news_filename">
                                            <?php  if ($fileimage == "") { ?>
                                                <img src="../img/testimonials-2.jpg" id="blah" alt="your image" class="img-circle" width="250" height="250" />
                                            <?php }elseif ($fileimage != "") { ?>
                                                <img src="../image_profile/<?php echo $fileimage; ?>" id="blah" alt="your image" class="img-circle" width="250" height="250" />
                                            <?php } ?>
                                            <div class="btn btn-block btn-success mt-3">Up load image. <i class="fas fa-upload" aria-hidden="true"></i></div>
                                        </label>
                                        <input id="news_filename" name="news_filename" type="file" style="display: none;" />
                                        <h4 class="card-title m-t-10">Dicky pakinson</h4>
                                        <h6 class="card-subtitle text-danger">After uploading images, please click "Update" below</h6>
                                        <div class="row text-center justify-content-md-center">
                                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                                    <font class="font-medium">254</font>
                                                </a></div>
                                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                                    <font class="font-medium">54</font>
                                                </a></div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <!-- Tab panes -->
                                <div class="card-body">
                                    <input name="iduser" type="hidden" value="<?php echo $session_login_id ?>">
                                    <div class="form-group">
                                        <label class="col-md-12">Frist Name</label>
                                        <div class="col-md-12">
                                            <input name="fristname" value="<?php echo $fristname;  ?>" type="text" placeholder="Dicky" class="form-control form-control-line">
                                        </div>
                                        <label class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input name="lastname" value="<?php echo $lastname;  ?>" type="text" placeholder="Pakinson" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" id="email" name="email" value="<?php echo $session_login_email;  ?>" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" id="password" name="password" value="<?php echo $session_login_password;  ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Confirm password</label>
                                        <div class="col-md-12">
                                            <input type="password" id="confirm_password" name="confirm_password" value="<?php echo $session_login_password;  ?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Age</label>
                                        <div class="col-md-12">
                                            <input name="age" value="<?php if ($age!=0) {echo $age;}  ?>" type="text" placeholder="22" class="form-control form-control-line">
                                        </div>
                                    </div>
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
                                        <label class="col-md-12">Height</label>
                                        <div class="col-md-12">
                                            <input name="height" value="<?php if ($height!=0) {echo $height;}  ?>" type="text" placeholder="200" class="form-control form-control-line">
                                        </div>
                                        <label class="col-md-12">Weight</label>
                                        <div class="col-md-12">
                                            <input name="weight" value="<?php if ($weight!=0) {echo $weight;}  ?>" type="text" placeholder="50" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Medical problems</label>
                                        <div class="row ml-1 mr-1">
                                            <div class="col-md-7" id="Medicalproblems">
                                                <input name="medicalproblems" type="text" placeholder="โรคหัวใจ" class="form-control form-control-line">
                                            </div>
                                            <button onclick="addMedicalproblems()" id="get" type="button" class="btn btn-danger btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Food allergies</label>
                                        <div class="row ml-1 mr-1">
                                            <div class="col-md-7" id="Foodallergies">
                                                <input name="foodallergies" type="text" placeholder="เนื้อ" class="form-control form-control-line">
                                                <input name="foodallergies" type="text" placeholder="นม" class="form-control form-control-line">
                                                <input name="foodallergies" type="text" placeholder="ไข่" class="form-control form-control-line">
                                            </div>
                                            <button onclick="addFoodallergies()" id="get" type="button" class="btn btn-danger btn-block"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone Number</label>
                                        <div class="col-md-12">
                                            <input name="phonenumber" value="<?php echo $phonenumber;  ?>" medicalproblems type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea name="message" value="" rows="5" class="form-control form-control-line"><?php echo $message;  ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select name="country" class="form-control form-control-line">
                                                <option selected>OSelect Country</option>
                                                <option <?php if ($country == "London") { ?>selected <?php } ?>>London</option>
                                                <option <?php if ($country == "India") { ?>selected <?php } ?>>India</option>
                                                <option <?php if ($country == "Usa") { ?>selected <?php } ?>>Usa</option>
                                                <option <?php if ($country == "Canada") { ?>selected <?php } ?>>Canada</option>
                                                <option <?php if ($country == "Thailand") { ?>selected <?php } ?>>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" value="update" class="btn btn-success">Update Profile</button>
                                        </div>
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

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function addMedicalproblems() {
            var Medipro = '';
            Medipro += '<input name="medicalproblems" type="text" placeholder="Medical problems" class="form-control form-control-line">';
            $("#Medicalproblems").append(Medipro);
        }

        function addFoodallergies() {
            var Foodaller = '';
            Foodaller += '<input name="foodallergies" type="text" placeholder="Food allergies" class="form-control form-control-line">';
            $("#Foodallergies").append(Foodaller);
        }


        $("#news_filename").change(function() {
            readURL(this);
        });
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
        var password = document.forms["vform"]["password"];
        var confirm_password = document.forms["vform"]["confirm_password"];

        //SETTING ALL EVENT LISTENER
        email.addEventListener("click", emailVerify);
        password.addEventListener("click", passwordVerify);
        confirm_password.addEventListener("click", confirm_passwordVerify);

        function Validate() {
            if (password.value == "") {
                password.style.border = "1px solid red";
                return false;
            }
            if (confirm_password.value == "") {
                confirm_password.style.border = "1px solid red";
                return false;
            }

            if (password.value != confirm_password.value) {
                alert("Password does not match!!");
                return false;

            }
        }

        function passwordVerify() {
            if (password.value == "") {
                password.style.border = "";
                return true;
            }

        }

        function confirm_passwordVerify() {
            if (confirm_password.value == "") {
                confirm_password.style.border = "";
                return true;
            }

        }
    </script>

</body>

</html>