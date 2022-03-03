<link rel="stylesheet" href="Style.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
<img class = "logotypePosition" src="Images/Logotype.png">
<title>Register</title>
</head>
<body>

<form>
  <div class = "registerConteiner">  
  <div><h1>User Registration</h1></div>
  <div class="mb-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firts Name">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Last Name" >
</div>

<div class="mb-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">

    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>

<div class="mb-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">

    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Address 2">
</div>
   
<div class="mb-3">
<select class="form-select" aria-label="Default select example">
<option value="" disabled selected hidden>Country</option>
<?php
$response = json_decode(file_get_contents("https://countriesnow.space/api/v0.1/countries/states"));
for($i =0; $i<count($response->data); $i++){
    $pais = $response->data[$i]->name;
    echo "<option value=\"$id\">$pais</option>";
} 
?>
</select>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="City">
</div>

<div class="mb-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Postal Code">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
</div>



<button type="submit" class="btn btn-primary">Sign up</button>

</form>
</div>





</body>
</html>