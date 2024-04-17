<?php

require_once('db.php');

$email = $_POST['email'];
$name = $_POST['name'];
$number = $_POST['number'];
$pass = $_POST['pass'];

if (empty($email) || empty($name) || empty($number) || empty($pass)) {}
else {
    $sql = "INSERT INTO `Users` (email, name, number, pass) VALUES ('$email', '$name', '$number', '$pass')";
    if ($conn -> query($sql) === TRUE) {
        header("Location: /main/main.php");
    }
}

?>