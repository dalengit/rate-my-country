<?php
$hostname = "yvu4xahse0smimsc.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$db = "dzw5qypfxwmaef4a";
$user = "s44f483lwmd8niat";
$password = "y95bhz6ymcc23fat";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $user, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}