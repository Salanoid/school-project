<?php
$servername = "localhost";
$username = "salanoid";
$password = "";
$sql;
try {
    $conn = new PDO("mysql:host=$servername;dbname=c9", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
