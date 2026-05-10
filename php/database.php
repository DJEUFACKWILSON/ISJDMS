<?php
// On your local XAMPP, these will use the default values
// On InfinityFree, we will set these up in their dashboard later
$host = getenv('DB_HOST') ?: "sql301.infinityfree.com";
$user = getenv('DB_USER') ?: "if0_41879347";
$pass = getenv('DB_PASS') ?: "iamabadboywick";
$dbname = getenv('DB_NAME') ?: "if0_41879347_web";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
