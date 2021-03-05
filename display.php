<?php 
    require("./serverConnection.php");

    $req = $db->prepare("SELECT * FROM etudiant");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute();
    $result = $req->fetchAll();

    echo "Nombre Etudiant ".count($result);
    for($i = 0; $i < count($result); $i++) {
        echo "</br> Firstname: ".$result[$i]['prenom_etudiant'];
        echo " Lastname: ".$result[$i]['nom_etudiant'];
        echo " faculty: ".$result[$i]['faculte_etudiant'];
        echo " Email: ".$result[$i]['email_etudiant']."</br>";
    }

?>