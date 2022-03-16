<link rel="stylesheet" href="Style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
<img class = "logotypePosition" src="Images/Logotype.png">
<title>Categories</title>
</head>
<?php
  include('functions.php');
?>

<body>

<div class = "logoutButtonPosition">
<button name = "LoginButton" type="submit" class="btn btn-primary">Logout</button>
</div>

<div class = "tableCategoriesPosition">

<div><h3>Categories</h3></div>

<div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <tbody>

    <?php
    $query = "SELECT * FROM categories";
    $excutingQuery = mysqli_query(credentials(),$query);
    while ($array = mysqli_fetch_array($excutingQuery)){
    ?>
    <tr>
    <td><?php echo $array ["id"] ?></td>
      <td><?php echo $array ["name"] ?></td>
      <td>Edit / Delete</td>
    </tr>
    <?php
    }
    ?>
    </tbody>
  </table>
    </div>

<div>
  <button name = "LoginButton" type="submit" class="btn btn-primary">Add Category</button>
  </div>
 

  




</body>
</html>