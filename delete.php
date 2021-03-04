<?php 
    require("./serverConnection.php");

    try {
        $req = $db->prepare("DELETE FROM etudiant WHERE id_etudiant = ?");
        $req->execute([3]);
        echo " User successfully deleted";
    } catch(PDOException $error) {
        echo " cannot delete the user ".$error->getMessage();
    }
    
?>