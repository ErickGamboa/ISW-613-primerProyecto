<link rel="stylesheet" href="Style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
<a href="login.php"><img class = "logotypePosition" src="Images/Logotype.png"/></a>
<title>Register</title>
</head>

<?php
  include('functions.php');
?>

<body>

<form method="POST">
  <div class = "registerConteiner">  
  <div><h1>User Registration</h1></div>
  <div class="mb-3">
    <input name = "name"  class="form-control"   placeholder="Firts Name">
    <input name = "lastName" class="form-control"  placeholder="Last Name" >
</div>

<div class="mb-3">
    <input name = "email"  class="form-control"   placeholder="Email Address">

    <input name = "password" type="password"  class="form-control"  placeholder="Password">
</div>

<div class="mb-3">
    <input name = "address"  class="form-control"   placeholder="Address">

    

<div class="mb-3">
<select name = "country" class="form-select" aria-label="Default select example">
<option value="" disabled selected hidden>Country</option>
<?php
$response = json_decode(file_get_contents("https://countriesnow.space/api/v0.1/countries/states"));
for($i =0; $i<count($response->data); $i++){
    $pais = $response->data[$i]->name;
    echo "<option value=\"$pais\">$pais</option>";
} 
?>
</select>
    <input name = "city"  class="form-control"  placeholder="City">
</div>


<div class="mb-3">

</div>

<div class="mb-3">
    
    <input name = "postalCode"  class="form-control"   placeholder="Postal Code" type="number">

    <input name = "phoneNumber"  class="form-control"  placeholder="Phone Number" type="number">

    
</div>

<div class="mb-3">

<select name = "typeUser" class="form-select" aria-label="Default">
    <option value="" disabled selected hidden>Type of User</option>
    <option value="Administrator" >Administrator</option>
    <option value="Client" >Client</option>
    </select>


</div>


<button name = "registerButton" type="submit" class="btn btn-primary">Sign up</button>


</form>
</div>


<?php

if (isset($_POST["registerButton"])) 
{
    if(empty($_POST['name']) ||  empty($_POST['lastName'])  ||  empty($_POST['email'])  ||  empty($_POST['password'])  || 
       empty($_POST['address']) ||  empty($_POST['country'])  ||  empty($_POST['city'])  || empty($_POST['postalCode'])   ||
       empty($_POST['phoneNumber']) ||  empty($_POST['typeUser'])) {

    echo '<script>alert("DEBES COMPLTEAR TODA LA INFORMACIÓN REQUERIDA")</script>';

    }
    else{

    saveUser(credentials(),"name","lastName","email","password","address","country","city","postalCode","phoneNumber","typeUser");
    echo '<script>alert("USUARIO CREADO CON ÉXITO")</script>';

    }

}

  ?>




</body>
</html>
