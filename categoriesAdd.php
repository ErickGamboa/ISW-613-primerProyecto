<link rel="stylesheet" href="Style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
<div class = "logotypePosition">  
<a href="categoriesMain.php"><img class = "logotypePosition" src="Images/Logotype.png"/></a>
</div>
<title>Register</title>
</head>
<?php
  include('functions.php');
?>

<body>

<form method="POST">
<div class = "categorieAddConteiner">  
<div><h3>Categorie</h3></div>
<input name = "nameCategorie" type="text" class="form-control"   placeholder="Name">
<br>
<button name = "saveCategrieButton" type="submit" class="btn btn-primary">Save</button>
</div>

<div class = "logoutButtonPosition">
<button name = "LoginButton" type="submit" class="btn btn-primary">Logout</button>
</div>

</form>

<?php

if (isset($_POST["saveCategrieButton"])) 
{
    if(empty($_POST['nameCategorie'])) {

    echo '<script>alert("DEBES COLOCARLE NOMBRE A LA CATEGORÍA")</script>';

    }
    else{

        saveCategorie(credentials(),"nameCategorie");
        echo '<script>alert("CATEGORÍA CREADA CON ÉXITO")</script>';
    }

}

  ?>


</body>
</html>