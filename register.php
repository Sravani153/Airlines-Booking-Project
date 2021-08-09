<?php
require_once('config.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="background-color:rgb(0,0,0,0.6);
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
    $userid     =   $_POST['userid'];
    $username   =   $_POST['username'];
    $phonenumber=   $_POST['pnumber'];
    $password   =   $_POST['password'];

    $sql="INSERT INTO users1(username,userid,password,pnumber) VALUES(?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$username,$userid,$password,$phonenumber]);
    if($result)
    {
      echo '<script>alert("sucessfully Registered");
      window.open("index1.php");</script>'
      ;
    }
  }
     ?>





      <a href="index.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary" style="color:black; font-size: 15px; background-color: white; 
  
  cursor: pointer;
  transition: 0.25px;
  padding: 4px 20px;
  outline: none;
  margin-right:20px;
  border: 2px solid #E5E5E5;">Home</button></a>
      <a href="login1.php" target="_self" align="right"><button type="button" class="btn btn-outline-primary" style="color:black; font-size: 15px; background-color: white; 
  
  cursor: pointer;
  transition: 0.25px;
  padding: 4px 20px;
  outline: none;

  border: 2px solid #E5E5E5;">Login</button></a>
      <div class="container">
        <img src="profile.png" alt="" class="rounded mx-auto d-block rounded-circle" style="max-width:25%">

      </div>
    <form  method="post">
      <div class="blockquote text-center ">
          <h1 color="">Registration Form</h1>
      </div>
    <div class="form-group row ">
      <label for="userid" class="col-sm-2 col-form-label">Enter your id</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="userid" required>
      </div>
    </div>
    <div class="form-group row ">
      <label for="username" class="col-sm-2 col-form-label">Enter your Name</label>
      <div class="col-sm-9">
        <input type="text"  class="form-control" name="username" required>
      </div>
    </div>
    <div class="form-group row ">
      <label for="pnumber" class="col-sm-2 col-form-label">Enter your Phone number</label>
      <div class="col-sm-9">
        <input type="number"  class="form-control"name="pnumber" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label" >Enter your Password</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" name="password"  required>
      </div>
    </div>
    <div class="text-center">
            <input type="submit" class="btn btn-outline-primary"style="color:white; font-size: 15px; background-color: black;
    cursor: pointer;
    transition: 0.25px;
    padding: 6px 30px;
    outline: none;
    margin-right:40px;
    border: 2px solid #E5E5E5;" name="create" value="Sign up">
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