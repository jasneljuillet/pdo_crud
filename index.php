<!DOCTYPE html>
<html>
    <head>
        <title> Practice</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
<body>
<main>
    
   

<div class="a">
<div class="formulaire">
    <h2>Contact Us</h2>
    <form method="POST" action="etudiant.php">
    <i class="fa fa-user"></i>
        <input type="text" name="prenom" class="txt" placeholder="Prenom"/><br><br>
    
    <i class="fa fa-user"></i>
    <input type="text" name="nom" class="txt" placeholder="Nom"/><br>
    <div class="w">
    <b>Sexe :</b> 
    <br>
    <label>masculin</label>
    <input class="txtx" type="radio" name="sexe" value="m" />
    <label>feminin</label>
    <input class="txtx" type="radio" name="sexe" value="f" />
    </div><br>
    <div id="show">
      <b>Facultes :</b> </br>
     <select name="faculte">
       <option value=""></option>
       <option value="Informatique"> Informatique</option>
       <option value="Medecine"> Medecine</option>
       <option value="Administration"> Administration</option>
       <option value="Gestion"> Gestion</option>
     </select>
    </div>
    <i class="fa fa-envelope"></i>
    <input type="email" name="email" class="txt" placeholder="E-mail"/><br><br>
    <br><input type="submit" name="sumit" value="Send" class="sub">
    </form>
</div>    
</div>



</main>
</body>
</html>
    