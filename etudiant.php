<?php 
    require("./serverConnection.php");
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $faculte = $_POST['faculte'];
    $email = $_POST['email'];

    if( !empty($nom) && !empty($prenom) && !empty($faculte) && !empty($email) ){
        $query = "INSERT INTO etudiant (id_etudiant, nom_etudiant, prenom_etudiant, sexe_etudiant, faculte_etudiant, email_etudiant)                                 VALUES(?,?,?,?,?,?) ";
        $stmt = $db->prepare($query);
        $stmt->execute([null, $nom, $prenom, $sexe, $faculte, $email]);
        echo " Etudiant Enregistre ";
    } else {
       echo " Etudiant non Enregistre ";
    }
?>