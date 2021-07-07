<?php


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "web_portfolio_comments";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("<script>alert('Connection Failed')</script>");
// }

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>