<?php
include 'conectDB.php';

$iduser = $_POST['iduser'];
$fristname = $_POST['fristname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = hash("md5", $_POST['password']);
$confirm_password = $_POST['confirm_password'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$medicalproblems = $_POST['medicalproblems'];
$foodallergies = $_POST['foodallergies'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];
$country = $_POST['country'];


if (is_uploaded_file($_FILES['news_filename']['tmp_name'])) {
    // Delete old image
    $sql_select = "SELECT fileimage FROM user WHERE id=$iduser";
    $resultimg = $conn->query($sql_select);
    $rowimg = mysqli_fetch_assoc($resultimg);
    $img_old = $rowimg['fileimage'];
    unlink('../image_profile/'.$img_old);
    // Upload new image
    $image_ext = pathinfo(basename($_FILES['news_filename']['name']), PATHINFO_EXTENSION);
    $news_image_name = 'prod_' . uniqid() . "." . $image_ext;
    $image_path = "../image_profile/";
    $image_upload_path = $image_path . $news_image_name;
    $success = move_uploaded_file($_FILES['news_filename']['tmp_name'], $image_upload_path);
    $sqlimg = "UPDATE user SET fileimage='$news_image_name' WHERE id=$iduser";
    $conn->query($sqlimg);
    if ($success == false) {
        echo "ไม่สามรถอัพโหลดไฟล์ได้";
        exit();
    }
}

$sql = "UPDATE user SET fristname='$fristname',lastname='$lastname',email='$email',password='$password',
age='$age',gender='$gender',height='$height',weight='$weight',phonenumber='$phonenumber',message='$message',country='$country' WHERE id=$iduser";


// $result = $conn->query($sqldata);
if ($conn->query($sql) === TRUE) {
    header("Location: ../user/profile.php");
} else {
    echo "Error updating record: " . $conn->error;
}
