<?php
include 'conectDB.php';

$email = $_POST['email'];
$password = hash("md5", $_POST['password']);
$confirm_password = $_POST['confirm_password'];
$status = $_POST['status'];



$sql = "INSERT INTO user (id,email,password,status,time_update) VALUES ('','$email', '$password','$status',CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    $sqldata = "SELECT * FROM user";
    $result = $conn->query($sqldata);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["email"] == $email) {
                if (hash("md5", $_POST['password']) == $row["password"]) {
                    session_start();
                    $data = "SELECT * FROM user WHERE email = $email";
                    $_SESSION['id'] = $row["id"];
                    $_SESSION['email'] = $row["email"];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['status'] = $_POST['status'];
                    header("Location: ../index.php");
                }
            }
        }
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
