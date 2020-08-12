<?php

include 'conectDB.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row["email"] == $email) {
            //user
            if (hash("md5", $_POST['password']) == $row["password"] && $row['status'] == "user") {
                session_start();
                $data = "SELECT * FROM user WHERE email = $email";
                $_SESSION['id'] = $row["id"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['status'] = $row['status'];
                header("Location: ../user/dashboard.php");
                break;
            }
            // admin
            elseif (hash("md5", $_POST['password']) == $row["password"] && $row['status'] == "admin") {
                session_start();
                $data = "SELECT * FROM user WHERE email = $email";
                $_SESSION['id'] = $row["id"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['status'] = $row['status'];
                header("Location: ../admin/admindashboard.php");
                break;
            }

            if (hash("md5", $_POST['password']) != $row["password"]) {
                header("Location: ../auth/login.php");
            }
        }
        if ($row["email"] != $email) {
            header("Location: ../auth/login.php");
        }
    }
}
