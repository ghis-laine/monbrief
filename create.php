<?php
$servername = "localhost";//ne pas toucher
$username = "spcom_userakoua";
$password = "MGROY892CICG";
$dbname = "spcom_akoua";// changer les infos

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
// $sql = "CREATE TABLE comment (
//     id_pub int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     commentaire varchar(350) NOT NULL,
//     id_img int(11) NOT NULL
//   )  ";
$sql = "CREATE TABLE `publish` (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  type varchar(100) NOT NULL,
  titre varchar(100) NOT NULL,
  description varchar(500) NOT NULL,
  pictures text NOT NULL,
  like_counter int(11) NOT NULL,
  dislike_counter int(11) NOT NULL,
  date timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ";
  

if ($conn->query($sql) === TRUE) {
  echo "Table publish created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
