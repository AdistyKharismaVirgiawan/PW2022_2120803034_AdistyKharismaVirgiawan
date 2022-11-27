<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<style>
.container{
    position: fixed;
    width: 650px;
    height: 100px;
    top: 100px;
    left: 200px;
    border: 30px solid gainsboro;
    border-radius: 0px 0px 0px 0px;
    text-align: center;
  }

  .container a {
   position: absolute;
    width: 50px;
    height: 50px;
    top: 25px;
    left: 200px;
    float: right;
    text-align: center;
    background-color: red;
    padding: 2px;
   
  }

  .header{
    position: absolute;
    width: 670px;
    height: 65px;
    top: 0px;
    left: 0px;
    background-color: gainsboro;
    text-align: center;
    font: poppins;
    font-size: 35px;
    font-weight: bold;
   
    
  }

  .header h3 {
    position: inherit;
    width: 600px;
    height: 65px;
    top: 50px;
    margin: 20px 20px 20px 20px ;
    background-color: none;
    padding: 5px;
    text-align: center;
    font: poppins;
    font-size: 20px;
    font-weight: bold;
  }

  .header button {
    border: 1px solid red;
    float: right;
    position: relative;
    bottom: 15px;
  
  }

</style>
<body>
<div class="container">
<div class="header">
<button style="color: white;  font-weight:bold; background-color:red;" type="submit" name="submit"  >Logout</button>
Selamat Datang, Admin

<h3>Ini adalah halaman admin</h3>
</div>




  
</body>
</html>

