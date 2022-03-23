<link rel="stylesheet" href="Style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
<a href="dashboardNews.php"><img class = "logotypePosition" src="Images/Logotype.png"/></a>
<title>News Sources</title>
</head>
<?php
  include('functions.php');

  session_start();

  $user = $_SESSION['user'];
  if (!$user) {
    header('Location: login.php');
  }

?>

<body>

<form method="POST">

<div class = "logoutButtonPosition">
<button name = "LogoutButton" type="submit" class="btn btn-primary">Logout</button>
</div>


<div class = "categorieAddConteiner">  
<div><h3>News Source</h3></div>
<input name = "nameSource" type="text" class="form-control"   placeholder="Name">
<br>
<input name = "url" type="text" class="form-control"   placeholder="RSS URL">
<br>

<select name = "category" class="form-select" aria-label="Default select example">
<option value="" disabled selected hidden>Category</option>

<?php
/** Se muestran las catgeorias guardadas en la base de datos */
$query = "SELECT * FROM categories";
$excutingQuery = mysqli_query(credentials(),$query);
while ($row = mysqli_fetch_array($excutingQuery)){
$category = $row ["category"];
    echo "<option value=\"$category\">$category</option>";
}
?>
</select>
<br>
<button name = "saveNewSource" type="submit" class="btn btn-primary">Save</button>
</div>




<div class = "tableCategoriesPosition">

<div><h3>Categories</h3></div>

<div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>

    <?php
    /** carga datos de la base de datos en una tabla */
    $query = "SELECT * FROM newssources";
    $excutingQuery = mysqli_query(credentials(),$query);
    while ($row = mysqli_fetch_array($excutingQuery)){
    ?>
    <tr>
    <td><?php echo $row ["nameSource"] ?></td>
      <td><?php echo $row ["categorySource"] ?></td>


      <td>
        

      <a href="editSource.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Edit

      </a>

      <a href="deleteSource.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Delete

      </a>

      

      
    
    </td>

    </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
    </div>

</form>


  



  <?php

    if (isset($_POST["saveNewSource"])) {

      if(empty($_POST['nameSource']) ||  empty($_POST['url'])  ||  empty($_POST['category'])) {

        echo '<script>alert("DEBES INGRESAR TODOS LOS DATOS")</script>';
        }
      else{

        saveNewSource(credentials(),"nameSource","url","category");
        header('Location: newSources.php');
        }
      }

    if (isset($_POST["LogoutButton"])) {
        session_start();
        session_destroy();
        header('Location: login.php');
      }
      
      
    

  ?>



</body>
</html>