<?php
include("connectiondb.php");
if(isset($_POST['request'])){
    $request=$_POST['request'];

    $query=" SELECT * FROM publish WHERE type = '$request'";
    $result = mysqli_query($conn,$query);
    $count = mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)) {?>
        <div class="gallery">
       <!-- <a target="_blank" href="images/Le poisson surfe sur les tendances de la nourriture saine.jpg"> -->
         
         <div class="contenant" > 
           <img  src="
         uploads/<?=$row['pictures']?>
         "alt="images">
          
         
         <!-- <img src="images/Le poisson surfe sur les tendances de la nourriture saine.jpg" alt="" style="margin-top: 100px;"> -->
         <!-- <div class="overlay" >300 x 250 - jpg<br> maximumwall.com</div> -->
         <img class="img_plus" src="
         uploads/<?=$row['pictures']?>
         "alt="images"> 
     
         </div>
       </a>
       <div class="desc"><?= $row['description']?></div>
     </div>
    
     <?php 
  }
}
?>
