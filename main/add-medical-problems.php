<?php

include 'conectDB.php';

$iduser = $_POST['iduser'];
$medical_problems = $_POST['medical_problems'];




$sql = "INSERT INTO medical_problems (user_id,tb_medical_problems,time_update) VALUES ('$iduser','$medical_problems',CURRENT_TIMESTAMP)";
if ($conn->query($sql) === TRUE) {
    header("Location: ../user/medical-problems.php");
} else {
    echo "Error updating record: " . $conn->error;
}


?>