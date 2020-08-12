<?php

include 'conectDB.php';

$iduser = $_POST['iduser'];
$food_allergies = $_POST['food_allergies'];




$sql = "INSERT INTO food_allergies (user_id,tb_food_allergies,time_update) VALUES ('$iduser','$food_allergies',CURRENT_TIMESTAMP)";
if ($conn->query($sql) === TRUE) {
    header("Location: ../user/food-allergies.php");
} else {
    echo "Error updating record: " . $conn->error;
}


?>