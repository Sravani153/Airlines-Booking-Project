<?php
//require_once('config.php');
include 'db_connect.php'
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="   background-color:rgb(0,0,0,0.6);
        width: 800px;
        margin: auto; background-image: url(assets/img/bg2.jpg);
        background-position: center;
    background-size: cover;
    font-family: sans-serif;
    margin-top:50px;
    ">
    <?php

    if(isset($_POST['create']))
  {
    $username     =   $_POST['userid'];

    $password   =   $_POST['password'];

    $res = mysqli_query($conn,"select* from users1 where userid='$username'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
  echo '<script>alert("sucessful login");
  window.open("index1.php");</script>'
  
  ;
}
else
{
  echo '<script>alert("LoginUnsuccessful Check your Password and user id");
</script>'
;
}
  }
     ?>



<a href="index.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary">Home</button></a>
<a href="register.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary">Register</button></a>

      <div class="container">
        <img src="./assets/img/profile.jpeg" alt="" class="rounded mx-auto d-block " style="max-width:25%">

      </div>
    <form  method="post">
      <div class="blockquote text-center ">
          <h1 style="color:white; margin-top:20px;text-align:center;display:block; border-radius:50% 50%">Login</h1>
      </div>
    <div class="form-group row ">
      <label for="userid" class="col-sm-2 col-form-label" style="color:white; font-size: 18px; text-align:center;">Enter your id</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="userid" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label" style="color:white; font-size: 18px; text-align:center;">Enter your Password</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password"  required>
      </div>
    </div>
    
    <div class="text-center">
            <input type="submit" class="btn btn-outline-primary" style="color:white; font-size: 15px; background-color: black;
    cursor: pointer;
    transition: 0.25px;
    padding: 6px 30px;
    outline: none;
    margin-right:40px;
    border: 2px solid #E5E5E5;" name="create" value="Sign In">
            <button type="reset" class="btn btn-outline-primary" style="color:white; font-size: 15px; background-color: black; 
  
    cursor: pointer;
    transition: 0.25px;
    padding: 6px 30px;
    outline: none;
    margin-left:40px;
    border: 2px solid #E5E5E5;">reset</button>
        </div>
  </form>



  </script>
  </body>
</html>