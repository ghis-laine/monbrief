<!-- table de commentaire -->
<?php
    include("connectiondb.php");
if(isset($_POST["boton"])){
    $id=$_POST['cool'];
$comment=$_POST['comment'];
$sql = "INSERT INTO comment (commentaire,id_img)
VALUES ('$comment','$id')";

if (mysqli_query($conn, $sql)) {
    echo "commentaire enregistré !!!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}else{
}

?>