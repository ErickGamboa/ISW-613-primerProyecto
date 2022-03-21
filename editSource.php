<link rel="stylesheet" href="Style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
<a href="newSources.php"><img class = "logotypePosition" src="Images/Logotype.png"/></a>
<title>Edit</title>
</head>


<body>
<?php

include('functions.php');

if (isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "SELECT * FROM newssources WHERE id=$id";
    $result = mysqli_query(credentials(),$query);
    if (mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        $name = $row["nameSource"];
        $category = $row["categorySource"];
    }
    
    }

if (isset($_POST["save"])){
    $id = $_GET["id"]; 
    $name = $_POST["nameNewsSource"]; 
    $category = $_POST["categoryNewsSource"]; 
    $query = "UPDATE newssources SET nameSource = \"$name\" ,  categorySource = \"$category\" WHERE id=$id";
    $result = mysqli_query(credentials(),$query);
    header('Location: newSources.php');
}

?>
<form action = "editSource.php?id=<?php echo $_GET["id"];?>" method="POST">
<div class = "categorieEditConteiner">  
<div><h3>News Source</h3></div>
<input name = "nameNewsSource" type="text" class="form-control"   placeholder="Name" value = <?php echo $name; ?>>
<br>


<select name = "categoryNewsSource" class="form-select" aria-label="Default select example" >
<option value= <?php echo $category?>> <?php echo $category?> </option>

<?php
$query = "SELECT * FROM categories";
$excutingQuery = mysqli_query(credentials(),$query);
while ($row = mysqli_fetch_array($excutingQuery)){
$category = $row ["category"];
    echo "<option value=\"$category\">$category</option>";
}
?>
</select>


<br>
<button name = "save" type="submit" class="btn btn-primary">Update</button>
</div>

</body>
</html>
