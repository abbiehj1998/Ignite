<?php
$servername = "localhost";
$username = "root";
$password = "password1";
$dbname = "Ignite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "UPDATE Tools SET Approved ='1' WHERE Tool_ID = ".$_POST['Tool_ID']." ;";

$result = $conn->query($query);

header('Location: Tools_Techniques.php')

?>
