
<?php
    require('./serverInformation.php');

    try{
        $db = new PDO("mysql:host=$server;dbname=$uneph", $user, $password);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "You are connected";
    } catch(PDOException $error) {
        echo "You are not connected".$error->getMessage();
    }
?>