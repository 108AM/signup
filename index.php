<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div>
        <form name="form">
            <div>
                <i class="fa-solid fa-user"></i>
                <label for= "user" required>Username</label>
                <input type="text" id="user" name="user"><br><br>
            </div>
            <div>
                <i class="fa-solid fa-envelope"></i>
                <label for="email">Email</label> 
                <input type="email" id="email" name="email"><br><br>
            </div>
            <div>
                <i class="fa-solid fa-lock"></i>
                <label for="password">Password</label>
                <input type="password" id="password" name="password"><br><br>
            </div>
            <div>
                <i class="fa-solid fa-lock"></i>
                <label for="password confirmation">Repeat password</label> 
                <input type="password" id="password confirmation" name="password confirmation"><br><br>
            </div>
        </form>
    </div>
  </body>
</html>