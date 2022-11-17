<?php
include'connectiondb.php';

if(isset($_POST['submit']) && isset($_FILES['my_image'])){
  // include"db_connect.php";
 
  $type = addslashes($_POST ['type']);
  $titre = addslashes($_POST ['titre']);
  $description = addslashes($_POST ['description']);
   
    $img_name=$_FILES['my_image']['name'];
    $img_size=$_FILES['my_image']['size'];
    $tmp_name=$_FILES['my_image']['tmp_name'];
    $error=$_FILES['my_image']['error'];

    if($error===0){
        if($img_size > 60000){
            $em="sorry, your file is too large";
            header("Location: index.php?error=$em");
        }else{
            $img_ex =pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc= strtolower($img_ex);

            $allowed_exs = array("jpg","jpeg","png");
            if(in_array($img_ex_lc,$allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path='uploads/'.$new_img_name;
                move_uploaded_file($tmp_name,$img_upload_path);

                //Insert into Database
                $sql="INSERT INTO publish (id,type,titre, description, pictures)
                VALUES ('','$type', '$titre', '$description','$new_img_name')";
                     // header("Location: view.php");
                      if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                      } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }
                      

            }else{
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }

    }else{
    $em="unknown error occured";
    header("Location: index.php?error=$em");
    }


}else{
    header("Location: index.php");
}


?>