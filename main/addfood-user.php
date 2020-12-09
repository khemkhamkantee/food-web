<?php
include 'connectAPI.php';
$url = 'add-receipe?username=cheasel&api_key=fe1913c8bddda7fbf1b050c92949ef887c97369bb965bc866bcbc9c15d65154e';

$iduser = $_POST['iduser'];
$namefood = $_POST['namefood'];
$Additional_explanation = $_POST['Additional_explanation'];
#$region = $_POST['region'];
$serve = $_POST['serve'];

$image_ext = pathinfo(basename($_FILES['news_filename']['name']), PATHINFO_EXTENSION);
$news_image_name = 'prod_'.uniqid().".".$image_ext;
$image_path = "../image_food/";
$image_upload_path = $image_path.$news_image_name;
$success = move_uploaded_file($_FILES['news_filename']['tmp_name'],$image_upload_path);

$title = $_POST['namefood'];
$serve = $_POST['serve'];
$description = $_POST['Additional_explanation'];
$ingredients = array( ['name' => '', 'value' => '', 'unit' => ''] );
$process = array();
for($i=0; $i < count($_POST['Ingredient']); $i++) {
    $ingredients[$i]['name'] = $_POST['Ingredient'][$i];
    $ingredients[$i]['value'] = $_POST['valueIngre'][$i];
    $ingredients[$i]['unit'] = $_POST['unitIngre'][$i];
}
for($i=0; $i < count($_POST['process']); $i++) {
    array_push($process, $_POST['process'][$i]);
}

$data_array =  array(
    "title" => $title,
    "serve" => $serve,
    "description" => $description,
    "ingredients" => $ingredients,
    "preparations" => $process,
    "image" => $image_upload_path,
    "user" => $iduser
);

postAPI($url, json_encode($data_array, true));
#print_r(json_decode(postAPI($url, json_encode($data_array, true)), true));
header("Location: ../admin/addfood-admin.php");

// ------- ค้นหา firstname lastname เพื่อเอาไปเก็บ reference -----------------
#$sql = "SELECT * FROM user WHERE id=$iduser";
#$result = $conn->query($sql);
/*while ($row = $result->fetch_assoc()) {
    $email = $row["email"];
    $fristname = $row["fristname"];
    $lastname = $row["lastname"];
    $status = $row["status"];
}
do {
    // -------- update profile เก็บ reference เป็น fristname lastname ------------------
    if (isset($fristname) && isset($lastname) && ($fristname != "") && ($lastname != "")) {
        $reference = $fristname . $lastname;
        $sql = "INSERT INTO menu (user_id,title,Additional_explanation,region,serve,image,reference,time_update)
    VALUES ('$iduser','$namefood', '$Additional_explanation','$region','$serve','$news_image_name','$reference',CURRENT_TIMESTAMP)";
        $conn->query($sql);

        break;

        // -------- ยังไม่ได้ update profile เก็บ reference เป็น email ------------------
    } elseif (isset($email) && ($email != "")) {
        $reference = $email;
        $sql2 = "INSERT INTO menu (user_id,title,Additional_explanation,region,serve,image,reference,time_update) 
    VALUES ('$iduser','$namefood', '$Additional_explanation','$region','$serve','$news_image_name','$reference',CURRENT_TIMESTAMP)";
        $conn->query($sql2);

        break;
    }
} while (0);*/

// ----------- หา menu id -----------
/*$sqlMenuID = "SELECT * FROM menu WHERE user_id=$iduser";
$result = $conn->query($sqlMenuID);
while ($row = $result->fetch_assoc()) {
    $menu_id = $row["id"];
}*/

/*if ($status == "user") {
header("Location: ../user/main-food.php");
}else {
    header("Location: ../admin/addfood-admin.php");
}*/
