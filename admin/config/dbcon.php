<?php
$host = "localhost";
$username = "id17909782_wilaiwan";
$password = "$vjE@2q^YPrWnULx";
$database = "id17909782_website";

// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "website";

$con = mysqli_connect("$host", "$username", "$password", "$database");
mysqli_set_charset($con,"utf8");

if (!$con) {
    header("Location: ../../errors/dberror.php");
    die();
}

 ?>