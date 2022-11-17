<?php
//include'upload-image/index.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Formulaire</title>
</head>
<body>

<h1>Publication</h1>
<form class="form-horizontal" method = "POST" name="myForm" enctype="multipart/form-data" action="insert.php">
    <div class="form-group">
        <label class="control-label col-sm-2" for="type">Type :</label>
        <div class="col-sm-10">
          <select  class="form-control"  name="type">
            <option value = "">Choisir une option</option>
            <option value = "Restaurant">Restaurant</option>
            <option value = "Cuisine">Retour d'experience</option>
            <option value = "Recette">Recette</option>
            <option value = "Astuce">Conseil</option>
          </select>
        </div>
        <br>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="title">Titre :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  placeholder="Title" name="titre" maxlength="100">
        </div>
      </div>
      <br>
      <!-- image input -->
      <div class="form-group">
      <input type="file" name="my_image" enctype="multipart/form-data" class="form-control" >
      </div>
<br>
      <div class="form-group">
        <label class="control-label col-sm-2" for="description">Description :</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="description" maxlength="500"></textarea>
        </div>
      </div>
      <br>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name = "submit" class="btn btn-default">Publier</button>
        </div>
      </div>
    </form>

</body>
</html>
