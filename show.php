<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<?php
        try{
            $db=new PDO("mysql:host=localhost;dbname=flap","root","");
        }
        catch(PDOException $e){
            die("Connect is Failed ". $e->getMessage() );
        }
        ?>
    <table class="table table-dark">
        <th>Id</th><th>User Name</th><th>Password</th>
    
        <?php
            $select=$db->prepare("SELECT * FROM user ");
            $select->execute();
            while($row=$select->fetch(PDO::FETCH_ASSOC) ){
                echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['pass']."</td></tr>";
            }
        ?>
    </table>
    <div><button><a href="add.php">Add</a></button></div>
</body>
</html>