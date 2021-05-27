<?php
$servername = "remotemysql.com";
// Enter your MySQL username below(default=root)
$username = "Hcb2lGj73X";
// Enter your MySQL password below
$password = "lkokPAYfVK";
$dbname = "Hcb2lGj73X";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
