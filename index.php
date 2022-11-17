<?php
include'connectiondb.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
	<title>welikefood</title>
	<link rel="stylesheet" type="text/css" href="style_css.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <style type="text/css">

    div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      /* width: 303px; */
      border-radius: 10px;
    }

    div.gallery:hover {
      /*border: 1px solid #777;*/
      box-shadow: 2px 2px 10px gray;
    }

    div.gallery img {
      width: 238px;
      height: 208px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      
    }

    div.desc {
      padding: 15px;
      text-align: center;
      width: 240px;
      height: 60PX;
      font-size: x-small;
      overflow:hidden;
      word-wrap : break-word;
    }

    .contenant {
      margin: 5px;
      /* background: url("images/Quelques astuces de publicitaires pour tricher avec la nourriture.jpg") no-repeat; */
      background-size: cover;
      width: 210px;
      height: 220px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant:hover {
      opacity: 1;
    }
    /* .overlay{
      opacity: 0;
    } */
    .contenant:hover .overlay { 
       opacity: 1; 
    }
    .contenant:hover .img_plus {
      opacity: 1;
    } 

   

    /* texte dans image */
    .overlay {
      
      margin-left: 15px;
      margin-bottom: 0px;  
      opacity: 0;
      transition: .5s ease;
      opacity:0;
      color: black;
      vertical-align: text-bottom;
      font-size: 11px;
      float: left;
      text-align: left;
      margin-top: -5px;

    }

    /* la petite image sur l'image */
    .img_plus {
      
      opacity: 0;
      transition: .5s ease;  
      text-align: right;
      height:40px;
      width:40px;

      
    }
    
    #commentaire {

      background: #f2f2f2;
      border: 1px solid #999;
      bottom: 0;
      color: #36b;
      cursor: pointer;
      display: block;
      height: 28px;
      line-height: 28px;
      min-width: 110px;
      padding: 0 5px;
      position: fixed;
      right: 20px;
      text-align: center;
      z-index: 4;
      font-family:'Roboto',Helvetica,Sans-Serif;
      font-size: 13px;
      
    }
    /*caroussel*/
    .swiper {
      width: 100%;
      height:  20%;
    }

    .swiper-slide { 
      font-size: 18px;
      background: #fff;
      margin: 5px;
      padding: 10px;
      display: flex;
      border-radius: 50px;   
      border: 0.5px solid skyblue;
      width: 170px;
      height: 55px;      
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      overflow:hidden;
      word-wrap : break-word;
      }
    /*fin caroussel*/

    .div_text_scroll {
      font-size: 15px;
      width: 100px;
      height: 50px;
      margin-left: 6px;
      margin-bottom: -8px;
      overflow:hidden;
      word-wrap : break-word;
    }
    .img_scroll {
      
      width: 60px;
      height: 50px;
      border-radius: 50%;
      margin-left: 0;
    }

    head {
      min-width: 1000px;
    }
    body {
      min-width: 1000px;
    }
.page{
  display: block;
  align-items: center;
}
.more{
  
  /* display:inline-flex; */
  /* justify-content: center; */
  /* flex-direction: column; */
 vertical-align: text-bottom;
  border: 2px solid #22D153;
  /* padding-left: 500px;
  padding-right: 500px; */
  font-size: x-large;
  text-decoration: none; 
  border-radius: 40px;
  width: 100%;
}

    </style>
</head>
<body>
  <!-- header -->
	&nbsp;
	<div style="display: flex;align-items: center;">
		&nbsp;&nbsp;&nbsp;<img width="80" height="80" src="css/logo.png">
 		<input id="rech" type="text" name="rech">
 		<img style="margin-left: -110px;margin-bottom: -5px;" src="css/micro.png">
 		<img style="margin-left: 2px;margin-bottom: -5px;" src="css/camera.png">
 		<img style="margin-left: 3px;margin-bottom: -4px;" src="css/loupe.png">
 		<input type="button" name="connexion" id="connexion" value="connexion">
 		&nbsp;<img style="margin-bottom: -5px;" src="css/parametre.png">
	</div><br>


	<div style="display: flex;align-items: center;">

		<div style="display: flex;align-items: center;">
		<nav>
		<a id="tout" href="#">TOUT</a>
		<a id="actu" href="#">ACTUALITES</a>
		<a id="imag" href="#">IMAGES</a>
		<a id="videos" href="#">VIDEOS</a>
		<a id="cartes" href="#">CARTES</a>
    <a id="publication" href="publication.php">PUBLICATION</a>
		<div class="animation start-home"></div>
		</nav>
	  </div>

	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 
	 <div style="display: flex;align-items: center;">
	 Filtre adulte: &nbsp;	 	 
	 <select style="border-style: none;font-weight: bold;" id="fecthval">
   <!-- <option value = "">Choisir une option</option> -->
            <option >Tout afficher</option>
            <option value = "Restaurant">Restaurant</option>
            <option value = "Cuisine">Retour d'experience</option>
            <option value = "Recette">Recette</option>
            <option value = "Astuce">Conseil</option>
	 </select>
	 &nbsp;&nbsp;&nbsp;&nbsp;Filtre <img style="margin-bottom: -7px;" src="css/filtre.png">
	 	</div>
	</div>
	

	<!--trait de separation-->
	 
	 <div>
	 	<hr style="margin-bottom: 10px;margin-top: 1px;">	 	
	 </div>
	 

	 <div class="swiper mySwiper">
      <div class="swiper-wrapper">
   <?php   
   $sql = "SELECT * FROM publish";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {?>
    <div class="swiper-slide">
      <img class="img_scroll" src="
      uploads/<?= $row['pictures']?> " alt="image">
    <div class="div_text_scroll"> <?= $row['titre']?><br> <?= $row['type']?>
    </div>
   
      
    </div>&nbsp;&nbsp;
    <?php 
  }
} 
?>
  </div>

      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; color: black; background-color: white;font-weight: bold;margin-top: -40px;margin-right: 0;"></div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px;color: black; background-color: white;font-weight: bold;margin-top: -40px;"></div>
      <!--<div class="swiper-pagination"></div>-->
    </div>
	 
	 <!-- header -->

	 <!--galerie image-->

<div class="page">



<?php   
   $sql = "SELECT * FROM publish";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {?>

 
   <div class="gallery" style="display: none;">
   <a href="affichage.php?id=<?=$row['id']?>"> 
    
   <div class="contenant" >
      <img  src="
    uploads/<?=$row['pictures']?>
    "alt="images">
   </div> 
 </a>
 <div class="desc"><?= $row['description']?>
  <br>

<!-- la date -->
Publié le: <?= $row['date']?>  </div>
</div>
    <?php 
  }
} 
?>

</div>
<!-- // bouton voir plus -->

<button class="more">voir plus</button>



<!--commentaire-->
<div class="commentaire" id="commentaire">
<a style="margin-top: 5px;" href="#">
	<img style="float: left;border: 0;
    height: 14px;
    margin: 0 5px -4px 0;
    width: 14px;
    display: inline;
    margin-top: 8px;
    " src="images/commentaire.jpg">
<div >commentaire</div>
</a>
</div>
<!--fin commentaire-->
	
<!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  //caroussel
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 7,
        spaceBetween: 1,
        slidesPerGroup: 7,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
//fin caroussel

    //filter
      $(document).ready(function(){
        $("#fecthval").on('change',function(){
          var value=$(this).val();
          $.ajax({
            url:"filtre.php",
            type:"POST",
            data:'request='+ value,
            // beforeSend:function(){
            //   $(".page").html("<span><working...</span>");
            // },
            success:function(data){
              $(".page").html(data);
            }
          });
        });
      });
      //load more
      $(document).ready(function(){
        $('.gallery').slice(0,10).show();
        $('.more').on('click',function(){
          $('.gallery:hidden').slice(0,10).slideDown('slow');

          if($('.gallery:hidden').length ==0 ){
            $(this).text('Vous êtes arrivés au bout!!');
        }
        return false;      
        });

      });
      // fin load more
    </script>

</body>
</html>