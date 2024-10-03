<?php
    include("connection.php")
?>

<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div id="form">
        <h1 id="heading">Sign Up Form</h1><br>
        <form name="form" action="signup.php" method="POST">
            <i class="fa fa-user fa-lg"></i>
            <input type="text" id="user" name="user" placeholder="Enter Username" required></br></br>
            <i class="fa-solid fa-envelope fa-lg"></i>
            <input type="email" id="email" name="email" placeholder="Enter Email" required></br></br>
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="password" id="pass" name="pass" placeholder="Create Password" required></br></br>
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="password" id="cpass" name="cpass" placeholder="Re-enter Password" required></br></br>
            <input type="submit" id="btn" value="Sign Up" name = "submit"/>
        </form>
    </div>
  </body>
</html>