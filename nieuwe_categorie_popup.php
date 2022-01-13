  <!-- de (frontend) popup voor als je op nieuw apparaat klikt -->
  <div class="Cat-popup" id="apparaat">
      <form action="" method="POST" class="Lever-in">
     <center>   <p class="Nieuw"> Nieuw Apparaat </p> <br>
    
    
      <input type="text" class="naam_categorie" placeholder="naam" name="nieuwe_categorie" required >
      <select name = "dropdown">
            <option value = "Computer Architecture" selected>Laptop</option>
            <option value = "Java">Telefoon</option>
            <option value = "Discrete Mathematics">Printer</option>
         </select>  <br> <br>  
      <input type="file" class="naam_categorie" placeholder="foto" name="nieuwe_categorie" required > <br> <br> <br> <br>
      
      </center>

        <button name="submitten" class="Maak_aan_knop">Maak aan</button>
        <a type="button" class="sluitknop" href="#">&times;</a>
      </form>
    </div>
 
 <!-- de (frontend) popup voor als je op nieuwe categorie klikt -->
  <div class="Cat-popup" id="categorie">
      <form action="" method="POST" class="Lever-in">
     <center>   <p class="Nieuw"> Nieuwe Categorie </p> <br>
    
    
      <input type="text" class="naam_categorie" placeholder="naam" name="nieuwe_categorie" required > <br> <br> <br><br> <br> <br>
      </center>

        <button name="submitten" class="Maak_aan_knop">Maak aan</button>
        <a type="button" class="sluitknop" href="#">&times;</a>
      </form>
    </div>

 <!-- de (frontend) popup voor als je op nieuwe categorie klikt -->
 <div class="Cat-popup" id="categorieNIEUW">
      <form action="" method="POST" class="Lever-in">
     <center>   <p class="Nieuw"> Categorie bewerken </p> <br>
    
    
      <input type="text" class="naam_categorie" placeholder="nieuwe naam" name="nieuwe_categorienaam" > <br> <br> <br><br> <br> <br>
      </center>

        <button name="bewerk" class="Maak_aan_knop">bewerk</button>
        <button name="verwijder" class="Maak_aan_knop">verwijder</button>
        <a type="button" class="sluitknop" href="/Uitleenregistratiesysteem/Apparaten%20overzicht.php#">&times;</a>
      </form>
    </div>

<?php

//als er in de popup van nieuwe categorie geklikt wordt dan word het onderstaande uitgevoert en wordt de ingevulde naam in de table van categorieen gezet
//(backend van de popup nieuwe categorie toevoegen)
if (isset($_POST['submitten'])) {
$categorie=$_POST['nieuwe_categorie'];

  $sql2 = "INSERT INTO `categorieen`(`Naam`) VALUES ('$categorie')";
  $insert2 = $conn->query($sql2);

  if ( $insert2 ) {

  header("/Uitleenregistratiesysteem/Apparaten%20overzicht.php#");

}}


//als er in de popup van nieuwe categorie geklikt wordt dan word het onderstaande uitgevoert en wordt de ingevulde naam in de table van categorieen gezet
//(backend van de popup nieuwe categorie toevoegen)
if (isset($_POST['bewerk'])) {
    $oudeCATnaam=$_GET['categorie'];
    $cat=$_POST['nieuwe_categorienaam'];
    
      $sql5 = "UPDATE `categorieen`SET `Naam`='$cat' WHERE Naam='$oudeCATnaam'";
      $update2 = $conn->query($sql5);
    
    
    }
    if (isset($_POST['verwijder'])) {
        $oudeCATnaam=$_GET['categorie'];
    
      $sql6 = "DELETE FROM `categorieen`WHERE `Naam`='$oudeCATnaam'";
      $delete = $conn->query($sql6);
    
    
    }

?>