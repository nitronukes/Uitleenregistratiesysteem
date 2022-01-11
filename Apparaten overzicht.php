<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>header</title>
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">Rocfriesepoort</a></div>
        <ul class="links">
          <li>
            <a href="#" class="desktop-item">Nieuw</a>
            <input type="checkbox" id="showDrop">
            <label for="showDrop" class="mobile-item">Nieuw</label>
            <ul class="drop-menu">
              <li><a href="#apparaat">apparaat</a></li>
              <li><a href="#categorie">Categorie</a></li>
           
            </ul>
            
          </li>
          <li>
            <a href="#" class="desktop-item">Sorteer</a>
            <input type="checkbox" id="showDrop">
            <label for="showDrop" class="mobile-item">Sorteer</label>
            <ul class="drop-menu">
              <li><a href="#">Beschikbaar</a></li>
              <li><a href="#">Uitgeleend</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="desktop-item">Categorie</a>
            <input type="checkbox" id="showDrop">
            <label for="showDrop" class="mobile-item">Categorie</label>
            <ul class="drop-menu">
              <li><a href="#">Laptops</a></li>
              <li><a href="#">Printers</a></li>
              <li><a href="#">Drones</a></li>
              <li><a href="#">Camera's</a></li>
            </ul>
            
          </li>
          
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
  
  
  <!-- de popup voor als je op nieuwe categorie klikt -->
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
Include "configure.php";

//als er in de popup van nieuwe categorie geklikt wordt dan word het onderstaande uitgevoert en wordt de ingevulde naam in de table van categorieen gezet
if (isset($_POST['submitten'])) {
$categorie=$_POST['nieuwe_categorie'];

  $sql2 = "INSERT INTO `categorieen`(`Naam`) VALUES ('$categorie')";
  $insert2 = $conn->query($sql2);

  if ( $insert2 ) {

    header("location:#");


}}



$retouneerdatum = $_POST['Retouneer']; 
$sql = "INSERT INTO `uitleen`(`Docent`, `Naam`,`Uitleendatum`, `Inleverdatum`) VALUES (?,?,CURDATE(),?)";

if (isset($_POST['Docent'], $_POST['Leerlingnmr'], $_POST['Retouneer'])) {
$insert = $conn ->prepare($sql);
$insert->bind_param('sss', $_POST['Docent'], $_POST['Leerlingnmr'], $_POST['Retouneer']);


// if (!$_POST['Retouneer']){
  if ($insert->execute())  {
    echo "
      <center>
      <body style='font-size:x-large;'>
      Apparaat is uit geleent.
        <br>
        <strong>Retouneer datum: $retouneerdatum </strong>
          <br>
        </div>
      </center>";
}
}

echo "<div class='apparatencontainer'>";

    $sql = "SELECT * FROM apparaten";
    if ($result = $conn->query($sql)) {
      foreach ($result as $row) {
      echo "
      
      <div class='nested'>
            <div>" . $row['Categorie'] . "</div>
            <div>" . $row['Apparaatnaam'] . "</div>
            <div>Afbeelding</div>
            <div> 
                <a type='button' class='open-button' href='?apparaat=" . $row['Apparaatnaam'] . "#myForm'>Leen uit</a>
                <p>Beschikbaar</p>
            </div>
      </div>";
      }}
    echo "</div>";
      
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparaten overzicht</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

</head>
<body>
    
<div class="form-popup" id="myForm">
  <form action="Apparaten overzicht.php" method="POST" class="form-apparaten-overzicht">
    <h1></h1>

    <input type="text" placeholder="Naam Docent" name="Docent" required>
    
    <input type="text" placeholder="Leerlingnummer" name="Leerlingnmr" required>
    <input type="date" name="Retouneer" required>

    <button type="submit" class="btn-AO">Leen uit</button>
    <a type="button" class="btn-cancel-AO" href="/Uitleenregistratiesysteem/Apparaten%20overzicht.php#">Sluit</a>
  </form>
</div>



</body>
</html>