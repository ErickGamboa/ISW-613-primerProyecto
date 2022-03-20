
<?php

include('functions.php');

if (isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "DELETE FROM categories WHERE id=$id";
    $excutingQuery = mysqli_query(credentials(),$query);
    header('Location: categoriesMain.php');
    }


