<?php 
    require("./serverConnection.php");

    $req = $db->prepare("SELECT * FROM etudiant");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute();
    $result = $req->fetchAll();

    echo "Nombre Etudiant ".count($result);
    for($i = 0; $i < count($result); $i++) {
        echo "<p> Email </p>".$result[$i]['email_etudiant'];
    }

?>