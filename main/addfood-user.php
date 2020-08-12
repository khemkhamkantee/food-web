<?php
include 'conectDB.php';

$iduser = $_POST['iduser'];
$namefood = $_POST['namefood'];
$Additional_explanation = $_POST['Additional_explanation'];
$region = $_POST['region'];
$serve = $_POST['serve'];

$image_ext = pathinfo(basename($_FILES['news_filename']['name']), PATHINFO_EXTENSION);
$news_image_name = 'prod_'.uniqid().".".$image_ext;
$image_path = "../image_food/";
$image_upload_path = $image_path.$news_image_name;
$success = move_uploaded_file($_FILES['news_filename']['tmp_name'],$image_upload_path);



// ------- ค้นหา fristname lastname เพื่อเอาไปเก็บ reference -----------------
$sql = "SELECT * FROM user WHERE id=$iduser";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
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
} while (0);

// ----------- หา menu id -----------
$sqlMenuID = "SELECT * FROM menu WHERE user_id=$iduser";
$result = $conn->query($sqlMenuID);
while ($row = $result->fetch_assoc()) {
    $menu_id = $row["id"];
}


// ----------- Ingredient -----------
do {
    if (!isset($_POST['nameIngredient1'])) {
        break;
    } else if (isset($_POST['nameIngredient1']) && ($_POST['nameIngredient1'] != "")) {
        $nameIngredient1 = $_POST['nameIngredient1'];
        $valueIngre1 = $_POST['valueIngre1'];
        $unit1 = $_POST['unit1'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient1','$valueIngre1','$unit1')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient2'])) {
        break;
    } else if (isset($_POST['nameIngredient2']) && ($_POST['nameIngredient2'] != "")) {
        $nameIngredient2 = $_POST['nameIngredient2'];
        $valueIngre2 = $_POST['valueIngre2'];
        $unit2 = $_POST['unit2'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
        VALUES ('$iduser','$menu_id', '$nameIngredient2','$valueIngre2','$unit2')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient3'])) {
        break;
    } else if (isset($_POST['nameIngredient3']) && ($_POST['nameIngredient3'] != "")) {
        $nameIngredient3 = $_POST['nameIngredient3'];
        $valueIngre3 = $_POST['valueIngre3'];
        $unit3 = $_POST['unit3'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
        VALUES ('$iduser','$menu_id', '$nameIngredient3','$valueIngre3','$unit3')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient4'])) {
        break;
    } else if (isset($_POST['nameIngredient4']) && ($_POST['nameIngredient4'] != "")) {
        $nameIngredient4 = $_POST['nameIngredient4'];
        $valueIngre4 = $_POST['valueIngre4'];
        $unit4 = $_POST['unit4'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
        VALUES ('$iduser','$menu_id', '$nameIngredient4','$valueIngre4','$unit4')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient5'])) {
        break;
    } else if (isset($_POST['nameIngredient5']) && ($_POST['nameIngredient5'] != "")) {
        $nameIngredient5 = $_POST['nameIngredient5'];
        $valueIngre5 = $_POST['valueIngre5'];
        $unit5 = $_POST['unit5'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
        VALUES ('$iduser','$menu_id', '$nameIngredient5','$valueIngre5','$unit5')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient6'])) {
        break;
    } else if (isset($_POST['nameIngredient6']) && ($_POST['nameIngredient6'] != "")) {
        $nameIngredient6 = $_POST['nameIngredient6'];
        $valueIngre6 = $_POST['valueIngre6'];
        $unit6 = $_POST['unit6'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
        VALUES ('$iduser','$menu_id', '$nameIngredient6','$valueIngre6','$unit6')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient7'])) {
        break;
    } else if (isset($_POST['nameIngredient7']) && ($_POST['nameIngredient7'] != "")) {
        $nameIngredient7 = $_POST['nameIngredient7'];
        $valueIngre7 = $_POST['valueIngre7'];
        $unit7 = $_POST['unit7'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
        VALUES ('$iduser','$menu_id', '$nameIngredient7','$valueIngre7','$unit7')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient8'])) {
        break;
    } else if (isset($_POST['nameIngredient8']) && ($_POST['nameIngredient8'] != "")) {
        $nameIngredient8 = $_POST['nameIngredient8'];
        $valueIngre8 = $_POST['valueIngre8'];
        $unit8 = $_POST['unit8'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
        VALUES ('$iduser','$menu_id', '$nameIngredient8','$valueIngre8','$unit8')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient9'])) {
        break;
    } else if (isset($_POST['nameIngredient9']) && ($_POST['nameIngredient9'] != "")) {
        $nameIngredient9 = $_POST['nameIngredient9'];
        $valueIngre9 = $_POST['valueIngre9'];
        $unit9 = $_POST['unit9'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient9','$valueIngre9','$unit9')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient10'])) {
        break;
    } else if (isset($_POST['nameIngredient10']) && ($_POST['nameIngredient10'] != "")) {
        $nameIngredient10 = $_POST['nameIngredient10'];
        $valueIngre10 = $_POST['valueIngre10'];
        $unit10 = $_POST['unit10'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient10','$valueIngre10','$unit10')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient11'])) {
        break;
    } else if (isset($_POST['nameIngredient11']) && ($_POST['nameIngredient11'] != "")) {
        $nameIngredient11 = $_POST['nameIngredient11'];
        $valueIngre11 = $_POST['valueIngre11'];
        $unit11 = $_POST['unit11'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient11','$valueIngre11','$unit11')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient12'])) {
        break;
    } else if (isset($_POST['nameIngredient12']) && ($_POST['nameIngredient12'] != "")) {
        $nameIngredient12 = $_POST['nameIngredient12'];
        $valueIngre12 = $_POST['valueIngre12'];
        $unit12 = $_POST['unit12'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient12','$valueIngre12','$unit12')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient13'])) {
        break;
    } else if (isset($_POST['nameIngredient13']) && ($_POST['nameIngredient13'] != "")) {
        $nameIngredient13 = $_POST['nameIngredient13'];
        $valueIngre13 = $_POST['valueIngre13'];
        $unit13 = $_POST['unit13'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient13','$valueIngre13','$unit13')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient14'])) {
        break;
    } else if (isset($_POST['nameIngredient14']) && ($_POST['nameIngredient14'] != "")) {
        $nameIngredient14 = $_POST['nameIngredient14'];
        $valueIngre14 = $_POST['valueIngre14'];
        $unit14 = $_POST['unit14'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient14','$valueIngre14','$unit14')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient15'])) {
        break;
    } else if (isset($_POST['nameIngredient15']) && ($_POST['nameIngredient15'] != "")) {
        $nameIngredient15 = $_POST['nameIngredient15'];
        $valueIngre15 = $_POST['valueIngre15'];
        $unit15 = $_POST['unit15'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient15','$valueIngre15','$unit15')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient16'])) {
        break;
    } else if (isset($_POST['nameIngredient16']) && ($_POST['nameIngredient16'] != "")) {
        $nameIngredient16 = $_POST['nameIngredient16'];
        $valueIngre16 = $_POST['valueIngre16'];
        $unit16 = $_POST['unit16'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient16','$valueIngre16','$unit16')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient17'])) {
        break;
    } else if (isset($_POST['nameIngredient17']) && ($_POST['nameIngredient17'] != "")) {
        $nameIngredient17 = $_POST['nameIngredient17'];
        $valueIngre17 = $_POST['valueIngre17'];
        $unit17 = $_POST['unit17'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient17','$valueIngre17','$unit17')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient18'])) {
        break;
    } else if (isset($_POST['nameIngredient18']) && ($_POST['nameIngredient18'] != "")) {
        $nameIngredient18 = $_POST['nameIngredient18'];
        $valueIngre18 = $_POST['valueIngre18'];
        $unit18 = $_POST['unit18'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient18','$valueIngre18','$unit18')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient19'])) {
        break;
    } else if (isset($_POST['nameIngredient19']) && ($_POST['nameIngredient19'] != "")) {
        $nameIngredient19 = $_POST['nameIngredient19'];
        $valueIngre19 = $_POST['valueIngre19'];
        $unit19 = $_POST['unit19'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient19','$valueIngre19','$unit19')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient20'])) {
        break;
    } else if (isset($_POST['nameIngredient20']) && ($_POST['nameIngredient20'] != "")) {
        $nameIngredient20 = $_POST['nameIngredient20'];
        $valueIngre20 = $_POST['valueIngre20'];
        $unit20 = $_POST['unit20'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient20','$valueIngre20','$unit20')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient21'])) {
        break;
    } else if (isset($_POST['nameIngredient21']) && ($_POST['nameIngredient21'] != "")) {
        $nameIngredient21 = $_POST['nameIngredient21'];
        $valueIngre21 = $_POST['valueIngre21'];
        $unit21 = $_POST['unit21'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient21','$valueIngre21','$unit21')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient22'])) {
        break;
    } else if (isset($_POST['nameIngredient22']) && ($_POST['nameIngredient22'] != "")) {
        $nameIngredient22 = $_POST['nameIngredient22'];
        $valueIngre22 = $_POST['valueIngre22'];
        $unit22 = $_POST['unit22'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient22','$valueIngre22','$unit22')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient23'])) {
        break;
    } else if (isset($_POST['nameIngredient23']) && ($_POST['nameIngredient23'] != "")) {
        $nameIngredient23 = $_POST['nameIngredient23'];
        $valueIngre23 = $_POST['valueIngre23'];
        $unit23 = $_POST['unit23'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient23','$valueIngre23','$unit23')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient24'])) {
        break;
    } else if (isset($_POST['nameIngredient24']) && ($_POST['nameIngredient24'] != "")) {
        $nameIngredient24 = $_POST['nameIngredient24'];
        $valueIngre24 = $_POST['valueIngre24'];
        $unit24 = $_POST['unit24'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient24','$valueIngre24','$unit24')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient25'])) {
        break;
    } else if (isset($_POST['nameIngredient25']) && ($_POST['nameIngredient25'] != "")) {
        $nameIngredient25 = $_POST['nameIngredient25'];
        $valueIngre25 = $_POST['valueIngre25'];
        $unit25 = $_POST['unit25'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient25','$valueIngre25','$unit25')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient26'])) {
        break;
    } else if (isset($_POST['nameIngredient26']) && ($_POST['nameIngredient26'] != "")) {
        $nameIngredient26 = $_POST['nameIngredient26'];
        $valueIngre26 = $_POST['valueIngre26'];
        $unit26 = $_POST['unit26'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient26','$valueIngre26','$unit26')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient27'])) {
        break;
    } else if (isset($_POST['nameIngredient27']) && ($_POST['nameIngredient27'] != "")) {
        $nameIngredient27 = $_POST['nameIngredient27'];
        $valueIngre27 = $_POST['valueIngre27'];
        $unit27 = $_POST['unit27'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient27','$valueIngre27','$unit27')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient28'])) {
        break;
    } else if (isset($_POST['nameIngredient28']) && ($_POST['nameIngredient28'] != "")) {
        $nameIngredient28 = $_POST['nameIngredient28'];
        $valueIngre28 = $_POST['valueIngre28'];
        $unit28 = $_POST['unit28'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient28','$valueIngre28','$unit28')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient29'])) {
        break;
    } else if (isset($_POST['nameIngredient29']) && ($_POST['nameIngredient29'] != "")) {
        $nameIngredient29 = $_POST['nameIngredient29'];
        $valueIngre29 = $_POST['valueIngre29'];
        $unit29 = $_POST['unit29'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient29','$valueIngre29','$unit29')";
        $conn->query($sqlIngre);
    }
    if (!isset($_POST['nameIngredient30'])) {
        break;
    } else if (isset($_POST['nameIngredient30']) && ($_POST['nameIngredient30'] != "")) {
        $nameIngredient30 = $_POST['nameIngredient30'];
        $valueIngre30 = $_POST['valueIngre30'];
        $unit30 = $_POST['unit30'];
        $sqlIngre = "INSERT INTO ingredients (user_id,menu_id,name_ingredients,value,unit) 
    VALUES ('$iduser','$menu_id', '$nameIngredient30','$valueIngre30','$unit30')";
        $conn->query($sqlIngre);
    }
} while (0);

// --------------- Preparation --------------------

do {
    if (!isset($_POST['process1'])) {
        break;
    } else if (isset($_POST['process1']) && ($_POST['process1'] != "")) {
        $process1 = $_POST['process1'];
        $numberProcess1 = $_POST['numberProcess1'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess1', '$process1')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process2'])) {
        break;
    } else if (isset($_POST['process2']) && ($_POST['process2'] != "")) {
        $process2 = $_POST['process2'];
        $numberProcess2 = $_POST['numberProcess2'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
        VALUES ('$iduser','$menu_id','$numberProcess2', '$process2')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process3'])) {
        break;
    } else if (isset($_POST['process3']) && ($_POST['process3'] != "")) {
        $process3 = $_POST['process3'];
        $numberProcess3 = $_POST['numberProcess3'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
        VALUES ('$iduser','$menu_id','$numberProcess3', '$process3')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process4'])) {
        break;
    } else if (isset($_POST['process4']) && ($_POST['process4'] != "")) {
        $process4 = $_POST['process4'];
        $numberProcess4 = $_POST['numberProcess4'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
        VALUES ('$iduser','$menu_id','$numberProcess4', '$process4')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process5'])) {
        break;
    } else if (isset($_POST['process5']) && ($_POST['process5'] != "")) {
        $process5 = $_POST['process5'];
        $numberProcess5 = $_POST['numberProcess5'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
        VALUES ('$iduser','$menu_id','$numberProcess5', '$process5')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process6'])) {
        break;
    } else if (isset($_POST['process6']) && ($_POST['process6'] != "")) {
        $process6 = $_POST['process6'];
        $numberProcess6 = $_POST['numberProcess6'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
        VALUES ('$iduser','$menu_id','$numberProcess6', '$process6')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process7'])) {
        break;
    } else if (isset($_POST['process7']) && ($_POST['process7'] != "")) {
        $process7 = $_POST['process7'];
        $numberProcess7 = $_POST['numberProcess7'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
        VALUES ('$iduser','$menu_id','$numberProcess7', '$process7')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process8'])) {
        break;
    } else if (isset($_POST['process8']) && ($_POST['process8'] != "")) {
        $process8 = $_POST['process8'];
        $numberProcess8 = $_POST['numberProcess8'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
        VALUES ('$iduser','$menu_id','$numberProcess8', '$process8')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process9'])) {
        break;
    } else if (isset($_POST['process9']) && ($_POST['process9'] != "")) {
        $process9 = $_POST['process9'];
        $numberProcess9 = $_POST['numberProcess9'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess9', '$process9')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process10'])) {
        break;
    } else if (isset($_POST['process10']) && ($_POST['process10'] != "")) {
        $process10 = $_POST['process10'];
        $numberProcess10 = $_POST['numberProcess10'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess10','$process10')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process11'])) {
        break;
    } else if (isset($_POST['process11']) && ($_POST['process11'] != "")) {
        $process11 = $_POST['process11'];
        $numberProcess11 = $_POST['numberProcess11'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess11','$process11')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process12'])) {
        break;
    } else if (isset($_POST['process12']) && ($_POST['process12'] != "")) {
        $process12 = $_POST['process12'];
        $numberProcess12 = $_POST['numberProcess12'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess12','$process12')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process13'])) {
        break;
    } else if (isset($_POST['process13']) && ($_POST['process13'] != "")) {
        $process13 = $_POST['process13'];
        $numberProcess13 = $_POST['numberProcess13'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess13','$process13')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process14'])) {
        break;
    } else if (isset($_POST['process14']) && ($_POST['process14'] != "")) {
        $process14 = $_POST['process14'];
        $numberProcess14 = $_POST['numberProcess14'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess14','$process14')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process15'])) {
        break;
    } else if (isset($_POST['process15']) && ($_POST['process15'] != "")) {
        $process15 = $_POST['process15'];
        $numberProcess15 = $_POST['numberProcess15'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess15','$process15')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process16'])) {
        break;
    } else if (isset($_POST['process16']) && ($_POST['process16'] != "")) {
        $process16 = $_POST['process16'];
        $numberProcess16 = $_POST['numberProcess16'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess16','$process16')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process17'])) {
        break;
    } else if (isset($_POST['process17']) && ($_POST['process17'] != "")) {
        $process17 = $_POST['process17'];
        $numberProcess17 = $_POST['numberProcess17'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess17','$process17')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process18'])) {
        break;
    } else if (isset($_POST['process18']) && ($_POST['process18'] != "")) {
        $process18 = $_POST['process18'];
        $numberProcess18 = $_POST['numberProcess18'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess18','$process18')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process19'])) {
        break;
    } else if (isset($_POST['process19']) && ($_POST['process19'] != "")) {
        $process19 = $_POST['process19'];
        $numberProcess19 = $_POST['numberProcess19'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess19','$process19')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process20'])) {
        break;
    } else if (isset($_POST['process20']) && ($_POST['process20'] != "")) {
        $process20 = $_POST['process20'];
        $numberProcess20 = $_POST['numberProcess20'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess20','$process20')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process21'])) {
        break;
    } else if (isset($_POST['process21']) && ($_POST['process21'] != "")) {
        $process21 = $_POST['process21'];
        $numberProcess21 = $_POST['numberProcess21'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess21','$process21')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process22'])) {
        break;
    } else if (isset($_POST['process22']) && ($_POST['process22'] != "")) {
        $process22 = $_POST['process22'];
        $numberProcess22 = $_POST['numberProcess22'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess22','$process22')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process23'])) {
        break;
    } else if (isset($_POST['process23']) && ($_POST['process23'] != "")) {
        $process23 = $_POST['process23'];
        $numberProcess23 = $_POST['numberProcess23'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess23','$process23')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process24'])) {
        break;
    } else if (isset($_POST['process24']) && ($_POST['process24'] != "")) {
        $process24 = $_POST['process24'];
        $numberProcess24 = $_POST['numberProcess24'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess24','$process24')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process25'])) {
        break;
    } else if (isset($_POST['process25']) && ($_POST['process25'] != "")) {
        $process25 = $_POST['process25'];
        $numberProcess25 = $_POST['numberProcess25'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess25','$process25')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process26'])) {
        break;
    } else if (isset($_POST['process26']) && ($_POST['process26'] != "")) {
        $process26 = $_POST['process26'];
        $numberProcess26 = $_POST['numberProcess26'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess26','$process26')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process27'])) {
        break;
    } else if (isset($_POST['process27']) && ($_POST['process27'] != "")) {
        $process27 = $_POST['process27'];
        $numberProcess27 = $_POST['numberProcess27'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess27','$process27')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process28'])) {
        break;
    } else if (isset($_POST['process28']) && ($_POST['process28'] != "")) {
        $process28 = $_POST['process28'];
        $numberProcess28 = $_POST['numberProcess28'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess28','$process28')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process29'])) {
        break;
    } else if (isset($_POST['process29']) && ($_POST['process29'] != "")) {
        $process29 = $_POST['process29'];
        $numberProcess29 = $_POST['numberProcess29'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess29','$process29')";
        $conn->query($sqlPre);
    }
    if (!isset($_POST['process30'])) {
        break;
    } else if (isset($_POST['process30']) && ($_POST['process30'] != "")) {
        $process30 = $_POST['process30'];
        $numberProcess30 = $_POST['numberProcess30'];
        $sqlPre = "INSERT INTO preparation (user_id,menu_id,num_preparation,preparation) 
    VALUES ('$iduser','$menu_id','$numberProcess30','$process30')";
        $conn->query($sqlPre);
    }
} while (0);

if ($status == "user") {
header("Location: ../user/main-food.php");
}else {
    header("Location: ../admin/addfood-admin.php");
}
