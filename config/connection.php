<?php
$host = "localhost";
$dbname = "u480057073_ProjetPHP";
$username = "u480057073_Oraciel";
$password = "d6c!78:Ev";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
