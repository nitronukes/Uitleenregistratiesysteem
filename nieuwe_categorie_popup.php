 <!-- de (frontend) popup voor als je op nieuwe categorie klikt -->
  <div class="form-popup" id="categorie">
      <form action="" method="POST" class="Lever-in">
     <center>   <p class="Nieuw"> Nieuwe Categorie </p> <br>
    
    
      <input type="text" class="naam_categorie" placeholder="naam" name="nieuwe_categorie" required > <br> <br> <br><br> <br> <br>
      </center>

        <button name="submitten" class="Maak_aan_knop">Maak aan</button>
        <a type="button" class="sluitknop" href="#">&times;</a>
      </form>
    </div>

<?php
//connectie maken met de database
Include "configure.php";

//als er in de popup van nieuwe categorie geklikt wordt dan word het onderstaande uitgevoert en wordt de ingevulde naam in de table van categorieen gezet
//(backend van de popup nieuwe categorie toevoegen)
if (isset($_POST['submitten'])) {
$categorie=$_POST['nieuwe_categorie'];

  $sql2 = "INSERT INTO `categorieen`(`Naam`) VALUES ('$categorie')";
  $insert2 = $conn->query($sql2);

  if ( $insert2 ) {

    header("location:#");


}}
?>