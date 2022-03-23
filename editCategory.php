<link rel="stylesheet" href="Style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
<a href="categoriesMain.php"><img class = "logotypePosition" src="Images/Logotype.png"/></a>
<title>Edit</title>
</head>


<body>
<?php

include('functions.php');

session_start();

  $user = $_SESSION['user'];
  if (!$user) {
  header('Location: login.php');
  }


if (isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "SELECT * FROM categories WHERE id=$id";
    $result = mysqli_query(credentials(),$query);
    if (mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $name = $row["category"];
    }
    
    }

if (isset($_POST["update"])){
    $id = $_GET["id"]; 
    $name = $_POST["nameCategorieEdit"]; 
    $query = "UPDATE categories SET category = \"$name\" WHERE id=$id";
    $result = mysqli_query(credentials(),$query);
    header('Location: categoriesMain.php');
}

?>

<form action = "editCategory.php?id=<?php echo $_GET["id"];?>" method="POST">
<div class = "categorieEditConteiner">  
<div><h3>Category</h3></div>
<input name = "nameCategorieEdit" type="text" class="form-control"   placeholder="Name" value = <?php echo $name; ?>>
<br>
<button name = "update" type="submit" class="btn btn-primary">Update</button>
</div>

</body>
</html>
