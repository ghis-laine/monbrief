<?php
$servername = "localhost";//ne pas toucher
$username = "spcom_userakoua";
$password = "MGROY892CICG";
$dbname = "spcom_akoua";// changer les infos
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//mysqli_close($conn);
?>
<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "monbrief";
?>