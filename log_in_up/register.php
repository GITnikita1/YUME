<?php

session_start();

require_once('db.php');

$email = $_POST['email'];
$username = $_POST['name'];
$number = $_POST['number'];
$pass = $_POST['password'];

if (empty($email) || empty($username) || empty($number) || empty($pass)) {
    echo "ERROR_FIELDS";
    exit();
}
else {
    $sql = "INSERT INTO `Users` (email, name, number, pass) VALUES ('$email', '$username', '$number', '$pass')";
    if ($conn -> query($sql) === TRUE) {
        $_SESSION["email"] = $email;
        $_SESSION["name"] = $username;
        echo "OK";
        exit();
    }
}

?>