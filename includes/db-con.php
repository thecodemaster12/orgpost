<?php

$dbServer = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'orgpost';
// $dbServer = 'localhost';
// $dbUsername = 'eporbo_fileuser';
// $dbPassword = 'R2Daho+-y[CQ';
// $dbName = 'eporbo_filemanagementdb';

try {
    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
    // echo 'You are connected ..!!!';
} catch (Exception $e) {
    echo "<strong>Failed to Connect:</strong> " . $e->getMessage();
}