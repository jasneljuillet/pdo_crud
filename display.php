<?php 
    require("./serverConnection.php");

    $req = $db->prepare("SELECT * FROM etudiant");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute();
    $result = $req->fetchAll();

    for($i = 0; $i < count($result); $i++) {
        echo $result[$i];
    }

?>