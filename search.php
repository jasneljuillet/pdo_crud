<?php 
    require("./serverConnection.php");

    $req = $db->prepare("SELECT * FROM formation");
    $req->execute();
    $result = $req->fetchAll();

    foreach($result as $item) {
        echo "</br>
            <center>
                <em>Id</em>: ".$item["id_formation"]
                ." </br><em>Titre</em>: ".$item["titre_formation"]
                ." </br><em>Date</em>: ".$item["date_formation"]
                ." </br><em>Formateur</em>: ".$item["formateur"]
                ."</br></br>
            </center>";
    }

    // form input
    echo "
        <center>
            <form action='' method='get'>
                <input type='text' placeholder='Search' name='search' />
                <input type='submit' name='snd' value='Search' />
            </form>
        </center>     
    ";

    if(isset($_GET["snd"])) {
        $word = $_GET["search"];
         
        $req = $db->prepare("SELECT * FROM formation WHERE titre_formation  LIKE '%$word%' ");
        $req->execute();
        $result = $req->fetchAll();
        if(is_array($result) || is_object($result) AND !empty($word)) {
            foreach($result as $item) {
                echo "</br>
                    <center>
                        <em>Id</em>: ".$item["id_formation"]
                        ." </br><em>Titre</em>: ".$item["titre_formation"]
                        ." </br><em>Date</em>: ".$item["date_formation"]
                        ." </br><em>Formateur</em>: ".$item["formateur"]
                        ."</br></br>
                    </center>";
            }
        }
    }

?>