<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprueba login</title>
</head>
<body>

<?php
    try {
        $base = new PDO("mysql:host=mysql;dbname=test;charset=utf8;port=3306","dev","dev");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIO= :login AND PASSWORD= :password";

        $resultado=$base->prepare($sql);

        $login=htmlentities(addslashes($_POST["login"]));

        $password=htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":login", $login);

        $resultado->bindValue(":password", $password);

        $resultado->execute();

        $numero_registro=$resultado->rowCount();

        if($numero_registro!=0) {
            echo "<h2>Adelante</h2>";
        }else {
            header("location:login.php");
        }


    }catch(Exception $e) {
        die("Error: " . $e->getMessage());
    }

?>
    
</body>
</html>