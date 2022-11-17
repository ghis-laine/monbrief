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
    }

    .contenant {
      margin: 5px;
      /* background: url("images/Quelques astuces de publicitaires pour tricher avec la nourriture.jpg") no-repeat; */
      background-size: cover;
      width: 210px;
      height: 210px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }

    .contenant1 {
      margin: 5px;
      background: url("images/Quelques astuces de publicitaires pour tricher avec la nourriture.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant1:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant1:hover .overlay {
      opacity: 1;
    }
    .contenant1:hover .img_plus {
      opacity: 1;
    }

    .contenant2 {
      margin: 5px;
      background: url("images/Nourriture épicée avantages et inconvénients.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant2:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant2:hover .overlay {
      opacity: 1;
    }
    .contenant2:hover .img_plus {
      opacity: 1;
    }

    .contenant3 {
      margin: 5px;
      background: url("images/Utiliser de la nourriture pour emballer de la nourriture.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant3:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant3:hover .overlay {
      opacity: 1;
    }
    .contenant3:hover .img_plus {
      opacity: 1;
    }

    .contenant4 {
      margin: 5px;
      background: url("images/Bon appétit - Nourriture - Crevettes - Citrons - Wallpaper - Free.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant4:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant4:hover .overlay {
      opacity: 1;
    }
    .contenant4:hover .img_plus {
      opacity: 1;
    }

    .contenant5 {
      margin: 5px;
      background: url("images/Délices culinaires - la nourriture asiatique en 80 photos délicieuses.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant5:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant5:hover .overlay {
      opacity: 1;
    }
    .contenant5:hover .img_plus {
      opacity: 1;
    }

    .contenant6 {
      margin: 5px;
      background: url("images/Gaspillage alimentaire  66 tonnes de nourriture jetées par seconde d.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant6:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant6:hover .overlay {
      opacity: 1;
    }
    .contenant6:hover .img_plus {
      opacity: 1;
    }

    .contenant7 {
      margin: 5px;
      background: url("images/J’ai mangé de la nourriture pour animaux - URBANIA.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant7:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant7:hover .overlay {
      opacity: 1;
    }
    .contenant7:hover .img_plus {
      opacity: 1;
    }

    .contenant8 {
      margin: 5px;
      background: url("images/J’ai mangé de la nourriture pour animaux - URBANIA_.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant8:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant8:hover .overlay {
      opacity: 1;
    }
    .contenant8:hover .img_plus {
      opacity: 1;
    }

    .contenant9 {
      margin: 5px;
      background: url("images/La nourriture bio, bonne pour la santé - Pieuvre.ca.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant9:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant9:hover .overlay {
      opacity: 1;
    }
    .contenant9:hover .img_plus {
      opacity: 1;
    }

    .contenant10 {
      margin: 5px;
      background: url("images/Nourriture déshydratée  Quels avantages - Devenir survialiste.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant10:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant10:hover .overlay {
      opacity: 1;
    }
    .contenant10:hover .img_plus {
      opacity: 1;
    }

    .contenant11 {
      margin: 5px;
      background: url("images/Nourriture poissons rouges Tetra Goldfish - Formule eau saine et claire.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant11:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant11:hover .overlay {
      opacity: 1;
    }
    .contenant11:hover .img_plus {
      opacity: 1;
    }

    .contenant12 {
      margin: 5px;
      background: url("images/Nourriture pour chinchilla Premium 12,5 Kg - Elevage - Ducatillon.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant12:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant12:hover .overlay {
      opacity: 1;
    }
    .contenant12:hover .img_plus {
      opacity: 1;
    }

    .contenant13 {
      margin: 5px;
      background: url("images/Nourriture poissons Zolux - Poissons d'ornement de Nourriture poisson.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant13:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant13:hover .overlay {
      opacity: 1;
    }
    .contenant13:hover .img_plus {
      opacity: 1;
    }

    .contenant14 {
      margin: 5px;
      background: url("images/NRêve de Nourriture - La Voix des Rêves.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant14:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant14:hover .overlay {
      opacity: 1;
    }
    .contenant14:hover .img_plus {
      opacity: 1;
    }

    .contenant15 {
      margin: 5px;
      background: url("images/Nourriture - Page 29.jpg") no-repeat;
      background-size: cover;
      width: 300px;
      height: 250px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;;
      margin-left: 0;
      margin-top: 0;
      
    }
    .contenant15:hover {
      opacity: 1;
      /*box-shadow: inset 10px 10px 10px blue;*/
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }
    .contenant15:hover .overlay {
      opacity: 1;
    }
    .contenant15:hover .img_plus {
      opacity: 1;
    }


    /* texte dans image */
    .overlay {
      
      margin-left: 10px;
      margin-bottom: -10px;  
      opacity: 0;
      transition: .5s ease;
      opacity:0;
      color: white;
      vertical-align: text-bottom;
      font-size: 11px;
      float: left;
      text-align: left;
      margin-top: 205px;

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
      }
    /*fin caroussel*/

    .div_text_scroll {
      font-size: 15px;
      width: 100px;
      height: 50px;
      margin-left: 6px;
      margin-bottom: -8px;
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
   position: relative; 
  align-items: center;
  display:flex;
  /* justify-content: center; */
  flex-direction: column;
  /* min-height: 100vh;  */
   bottom: 0; 
  width: 100%;
  border: 2px solid black;
  margin-left: 600px;
}
</style>
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

	<!--div de la 2eme ligne-->
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
            <option value = "" >Tout afficher</option>
            <option value = "Restaurant">Restaurant</option>
            <option value = "Cuisine">Retour d'experience</option>
            <option value = "Recette">Recette</option>
            <option value = "Astuce">Conseil</option>
	 </select>
	 &nbsp;&nbsp;&nbsp;&nbsp;Filtre <img style="margin-bottom: -7px;" src="css/filtre.png">
	 	</div>
	</div>
	<!--fin div de la 2eme ligne-->

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
    </script>