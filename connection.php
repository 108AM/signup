<!DOCTYPE html>
<html>
<head>
    <title>hi</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="process-signup.php" method="post"> 
        <div>
            <label for= "name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email</label> 
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="password confirmation">Repeat password</label> 
            <input type="password" id="password confirmation" name="password confirmation">
        </div>
    </form>
    <button>Submit</button>
</body>
</html>