<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="insert.php" method="post">
    <div><p>Id</p><input type="text" name="id" required></div>
    <div><p>UserName</p><input type="text" name="username" required></div>
    <div><p>Password</p><input type="password" name="password" required></div>
    <div><input type="submit" value="Add">
        <button><a href="show.php">Back</a></button>
    </div>
</form>
   
</body>
</html>