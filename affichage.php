
<?php 
include("connectiondb.php");
include("galerie.php");
$rot= $_GET['id'];
   $sql = "SELECT * FROM publish WHERE id= $rot";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
<style>
.type{      /*  le type  */
color: #008518;
text-align: center;
font-size: 50px;
margin-left: 500px;

}

.titre{      /*  le titre  */
color: #3551EC;
font-size: 50px;
margin-left: 35px;
/* margin-left: 600px; */

}
.desc{   /*  la description  */
    color: #000000;
    /* margin-left: 600px; */
   
} */
 .date{   /*  la date  */
     color: #596CE5;
    
}
/* La grande div */
.grande{
/* display: inline-block; */
/* padding: 20px; */
margin-left: 600px;
margin-top: 4000px;
height: 450px;
width: 250px;
padding-top: 150px;
}

/* l'image et sa box */

 .imag{          /* la box*/
    width: 310px;
    height: 310px;
    border: 2px solid #008518;
    border-radius: 25px;
    /* margin: 30px; */
    margin-left: 250px;
    margin-top: 50px;
    padding: 6px;
}

 .imag img{          /*  l'image */
  
    width: 240px;
    height: 240px;
    /* padding: 15px; */
    border-radius: 25px;
    margin-left: 25px;
    margin-top: 8px;
}
/* Bouton du commentaire */
.boton{
  border: 4px solid #4472C4;
  border-radius: 45%;
  background-color: #4472C4;
  margin-top: 60px;
}
.boton img {
  border-radius: 45%;
}

/* input commentaire */

#comment{
margin-left: 250px;
width: 600px;
height: 100px;
border: 2px solid #4472C4;
border-radius: 30px;
margin-bottom: 10px ;
}

</style>
<title>Upload image</title>
</head>

<div class="contenant" > <!--la grande div -->

<!-- div du type -->
<div class="type"><?= $row['type']?></div>

<!-- div de l'image -->
<div class="imag">  <img  src=" uploads/<?=$row['pictures']?> "alt="images">

</div>

<!-- bouton like & dislike -->


<?php include('like.php'); ?>


<!-- grande div de titre et description -->
 <div class="grande" style="margin-top: -480px;">

 <!-- div du titre -->
<div class="titre"><?= $row['titre']?>
</div>

<!-- div de la description -->
<div class="desc"><?= $row['description']?>
<br>
<br>
<!-- la date -->
Publié le: <?= $row['date']?>
</div>    

</div><!-- fermeture de la grande div -->

 
</div> 

    

 
<!-- place commentaire -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<form action="" method="POST">
<input type="hidden"  name="cool" value="<?php echo"$rot"; ?>">
<input type="text" name="comment"  id="comment" cols="50" rows="90" maxlength="300" required placeholder="commentaire...">
<button class="boton" name="boton" >
<img src="css/bouton.png" alt="btn">
</button>
</form>
<?php
include 'comment.php';
?>
<?php 
  }
} 

?>


</html>


<!-- <textarea name="commentaire" id="comment" cols="50" rows="90" maxlength="300" required placeholder="commentaire...">jjjjjj</textarea> -->




