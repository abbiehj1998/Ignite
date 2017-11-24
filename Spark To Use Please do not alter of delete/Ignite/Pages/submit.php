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

$Name = $_POST["tool_name"];
$Description = $_POST["description"];
$Category = $_POST["Category"];

$Q = "INSERT INTO Tools (Tool_Name, Description, Category) VALUES (?,?,?)";
$Query = $conn->prepare($Q);
$Query->bind_param("sss", $Name, $Description, $Category);
$Query->execute();

header('Location: Tools_Techniques.php')
?>
