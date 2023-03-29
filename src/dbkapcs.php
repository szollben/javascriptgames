<?php

// adatbáziskapcsolat
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uzenofal";

$conn = new mysqli($servername, $username, $password, $dbname);

// hibaellenőrzés az adatbáziskapcsolatnál
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}



?>