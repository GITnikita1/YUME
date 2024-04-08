<?php

$servername = "k90653re.beget.tech";
$username = "k90653re_yume";
$password = "Mysql_YUME_12345";
$dbname = "k90653re_yume";

$conn = mysqli_connect($servername,$username,$password, $dbname);

if (!$conn) {
    die("Connection Fialed". mysqli_connect_error());
} else {
    echo "Happy";
}

?>