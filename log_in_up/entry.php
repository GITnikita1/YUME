<?php

session_start();

require_once('db.php');

$email = $_POST['email'];
$pass = $_POST['password'];

if (empty($email) || empty($pass)) {
    echo "ERROR_FIELDS";
    exit();
}
else {
    $sql = "SELECT * FROM `Users` WHERE email = '$email' AND pass = '$pass'";
    $result = $conn -> query($sql);
    if ($result -> num_rows == 1) {
        $name = $result -> fetch_all(MYSQLI_ASSOC)[0]["name"];
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;
        echo "OK";
        exit();
    }
    echo "ERROR";
    exit();
}

?>