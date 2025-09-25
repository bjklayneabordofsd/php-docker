<?php
require_once 'db.php';

//SQL query
$users = Database::query("SELECT * FROM users");

// Display the data
// echo "ID: " . $users . " - Name: " . $users . "<br>";
?>