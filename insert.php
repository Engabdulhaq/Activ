<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $id=$_POST["id"];
    $username=$_POST["username"];
    $password=$_POST["password"];
        try{
            $db=new PDO("mysql:host=localhost;dbname=flap","root","");
        }
        catch(PDOException $e){
            die("Connect is Failed ". $e->getMessage() );
        }
        $insert=$db->prepare("INSERT INTO user (`id`, `username`, `pass`) VALUES (:id,:uname,:pass)");
        $insert->bindparam(":id",$id);
        $insert->bindparam(":uname",$username);
        $insert->bindparam(":pass",$password);
        $insert->execute();
        if($insert->rowcount() ){
          echo "Inserted Successfully ";
          
        }
        else{
            echo "Dosn't Insert !!";
        }
        ?>
<p>to show the users <a href="show.php">click here</a>"</p>
</body>
</html>