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
//connectie maken met de database
Include "configure.php";

//als er in de popup van nieuwe categorie geklikt wordt dan word het onderstaande uitgevoert en wordt de ingevulde naam in de table van categorieen gezet
//(backend van de popup nieuwe categorie toevoegen)
if (isset($_POST['bewerk'])) {
$oudeCATnaam=$_GET['categorie'];
$cat=$_POST['nieuwe_categorienaam'];

  $sql5 = "UPDATE `categorieen`SET `Naam`='$cat' WHERE Naam='$oudeCATnaam'";
  $update2 = $conn->query($sql5);


  if ( $update2 ) {

  header("location:/Apparaten overzicht.php");

}}
if (isset($_POST['verwijder'])) {
    $oudeCATnaam=$_GET['categorie'];

  $sql6 = "DELETE FROM `categorieen`WHERE `Naam`='$oudeCATnaam'";
  $delete = $conn->query($sql6);

  if ( $delete ) {

    header("location:/Uitleenregistratiesysteem/Apparaten overzicht.php#");
}}
?>