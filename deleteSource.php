<?php

include('functions.php');

if (isset($_GET["id"])){
    $id = $_GET["id"];
    $query = "DELETE FROM newssources WHERE id=$id";
    $excutingQuery = mysqli_query(credentials(),$query);
    header('Location: newSources.php');
    }

