
<?php

include('functions.php');
/** Elimina la tabla del id enviado */
if (isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "DELETE FROM categories WHERE id=$id";
    $excutingQuery = mysqli_query(credentials(),$query);
    header('Location: categoriesMain.php');
    }


