<?php 
if (isset($_POST["submit"])) {


  if($_POST["username"] == "admin" && $_POST["password"] == "123")  {

    header ("Location: admin.php");
    exit;
  }  else {

    $error =true;

  }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<style>
  .container{
    position: absolute;
    width: 500px;
    height: 300px;
    top: 100px;
    left: 370px;
    border: 30px solid gainsboro;
    border-radius: 0px 0px 0px 0px;
    text-align: center;
  }
  .header{
    position: absolute;
    width: 500px;
    height: 70px;
    top: 0px;
    left: 0px;
    background-color: gainsboro;
    text-align: center;
    font: poppins;
    font-size: 35px;
    font-weight: bold;
  }

  

</style>
<body>
<div class="container" >
  <div class="header">Login</div>
  <h1>Login</h1>

  
  <ul>
    <form action="" method="POST">
    <br>
      <label for="username">Username  :</label>
      <input type="text" name="username" id="username">
</br>
    <br>
    <label for="password">Password   :</label>
      <input type="password" name="password" id="password">
</br>

<?php if (isset ($error)) : ?>
  <p style="color: red; font-style:italic; ">Username / Password salah!</p>
  <?php endif; ?>
  <br>
    <button style="color: white;  font-weight:bold; background-color:blue;  border: 1px solid blue; position:relative; top: 30px; " type="submit" name="submit" >Log In</button>
</br>
</ul>
  </form>
  
</body>
</html>