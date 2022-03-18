<?php

function credentials (){
$server = "localhost";
$user = "root";
$passw = "";
$dataBase = "dbprimerproyecto";

$link = mysqli_connect($server,$user,$passw,$dataBase);
return $link;
}

function saveUser ($link, $name, $lastName, $Email, $Password, $Address, $Country, $City,  $postalCode, $phoneNumber, $TypeUser){
    $rName = $_POST["$name"];
    $rlastName = $_POST["$lastName"];
    $rEmail = $_POST["$Email"];
    $rPassword = $_POST["$Password"];
    $rAddress = $_POST["$Address"];
    $rCountry = $_POST["$Country"];
    $rCity = $_POST["$City"];
    $rPostalCode = $_POST["$postalCode"];
    $rPhoneNumber = $_POST["$phoneNumber"];
    $rTypeUser = $_POST["$TypeUser"];

    $insertData = "INSERT INTO users VALUES(NULL,'$rName','$rlastName','$rEmail','$rPassword','$rAddress','$rCountry','$rCity','$rPostalCode','$rPhoneNumber','$rTypeUser')";
    return $executeInsert = mysqli_query($link, $insertData );

}

function authenticate($link, $username, $passw){
    $lUserName = $_POST["$username"];
    $lPassword = $_POST["$passw"];
    $query = "SELECT * FROM users WHERE `Email` = '$lUserName' AND `Password` = '$lPassword'";
    $excutingQuery = mysqli_query($link,$query);
    $array = mysqli_fetch_array($excutingQuery);
  
    if(empty($array)){
        return false;
    } else {
        return $array;
    }}

function saveCategorie ($link, $name){
    $rName = $_POST["$name"];
    $insertData = "INSERT INTO categories VALUES(NULL,'$rName')";
    return $executeInsert = mysqli_query($link, $insertData );
    
}

function showCategories ($link){
    $query = "SELECT * FROM categories";
    $excutingQuery = mysqli_query($link,$query);
    $array = mysqli_fetch_array($excutingQuery);
    for($i=0; $i<=$array; $i++);
    echo  $array[1];
    $array = mysqli_fetch_array($excutingQuery);
    }

    