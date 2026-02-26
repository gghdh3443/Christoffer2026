<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "skole";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("kunne ikke koble til databasen: " . $conn->connect_error);
}
$sql = "SELECT * FROM kjaeledyr";

$result = $conn->query($sql);
?>


