<?php 
    require("./serverConnection.php");
    
    try{
        $req = $db->prepare("UPDATE etudiant SET nom_etudiant = ? WHERE id_etudiant = ?");
        $req->execute(["Vilsaint Sondy", 4]);
        echo "User Update";
    } catch(PDOException $error) {
        echo "cannot update the user ".$error->getMessage();
    }
    
?>