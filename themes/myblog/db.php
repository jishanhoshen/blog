<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//select post
$sql = "SELECT * FROM post";
$postResult = $conn->query($sql);
//select post

$theme = "SELECT * FROM themeMood";
$themeresult = $conn->query($theme);
if ($themeresult->num_rows > 0) {
  while($themerow = $themeresult->fetch_assoc()) {
  	$theme = $themerow;
  }
}
?>