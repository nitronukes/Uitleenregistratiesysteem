<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Apparatuuroverzicht</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
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
        <li><a href="login.php">Loguit</a></li>
        <li><a href="Uitleenoverzicht.php">Uitleenoverzicht</a></li>
          <li><a href="#">Apperatuuroverzicht</a></li>
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
              
<?php

//connectie maken met de database
Include "configure.php";

session_start();

//info uit de database halen
$sql3 = "SELECT `Naam` FROM categorieen";
$result2 = $conn->query($sql3);
//header van de tabel
foreach ($result2 as $row2) {
echo "
<li><p>" . $row2['Naam']  . " <button><a class='far fa-edit' style='background:#171c24;' href='?categorie=" . $row2['Naam'] . "#categorieNIEUW'></a></button></p></li>";
}
  ?>
            </ul>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="search-box">
        <input type="text" placeholder="Type Something to Search..." name="Zoekbar">
        <button name="Zoekbarenter"type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
<?php
echo "<br><br><br><div class='apparatencontainer'>";
if (isset($_POST['Zoekbarenter'])) { 

  
  $Zoekresult = htmlspecialchars($_REQUEST['Zoekbar']);
  
    if (empty($Zoekresult)) {
    
        $sql = "SELECT * FROM apparaten";
        
    } else {
      
      $sql = "SELECT * FROM apparaten WHERE Categorie like '$Zoekresult%' or Apparaatnaam like '$Zoekresult%'";

    } } else {
        $sql = "SELECT * FROM apparaten";
      }
      if ($result = $conn->query($sql)) {
      foreach ($result as $row) {
      echo "
      
      <div class='nested'>
      
            <div>catagorie: " . $row['Categorie'] . "</div>
            <div>apparaat: " . $row['Apparaatnaam'] . "</div>
            <div ><img class='Image-AO' src=img/" . $row['Afbeelding'] . "></div>
            <div > ";
                if($row['status'] == 0){
                  echo"                   
                  <p style='color:Red; text-decoration:underline;'>Uitgeleend</p>
                  <a type='button' class='open-button' href='?apparaat=" . $row['Apparaatnaam'] . "#myForm2'>Lever in</a> <br>
                  <a style='color:black; float:left; margin-left:1%;' class='fas fa-info-circle' href='?apparaat=" . $row['Apparaatnaam'] . "#opmerking'></a>

                 </div>
                  </div>";
              }else{
                echo" 
                <p style='color:Green; text-decoration:underline;'>Beschikbaar</p>
                <a type='button' class='open-button' href='?apparaat=" . $row['Apparaatnaam'] . "#myForm'>Leen uit</a> <br>
                <a style='color:black; float:left; margin-left:1%;' class='fas fa-info-circle' href='?apparaat=" . $row['Apparaatnaam'] . "#opmerking'></a></div>
                </div>";
        }}}
       
       echo "</div>";  
      
//verwijzing naar de pagina "nieuwe_categorie_popup.php", daar staat de code van de nieuwe categorie popup in.
include "nieuwe_categorie_popup.php";    
?>

<div class="Form-popup2" id="myForm2">
  <form action="" method="POST" class="Lever-in">


   <textarea class="opmerking2" placeholder="Opmerking" name="opmerking" ></textarea> <br> <br> <br>

    <button name="submit" class="Maak_aan_knop">Lever in</button>
    <a type="button" class="sluitknop" href="/Uitleenregistratiesysteem/Apparaten%20overzicht.php#">&times;</a>
  </form>
</div>

</body>
</html>





<div class="form-popup" id="myForm">
  <form action="" method="POST" class="form-apparaten-overzicht">

    <input type="text" placeholder="Naam Docent" name="Docent" required>
    
    <input type="text" placeholder="Leerlingnummer" name="Leerlingnmr" required>
    <input type="date" name="Retouneer" required>

    <button name="submit" class="btn-AO">Leen uit</button>
    <a type="button" class="btn-cancel-AO" href="/Uitleenregistratiesysteem/Apparaten%20overzicht.php#">Sluit</a>
  </form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
  header("location:/Uitleenregistratiesysteem/Apparaten%20overzicht.php#");


  $apparaat= $_GET['apparaat'];
  $retouneerdatum = $_POST['Retouneer']; 
  $docent = $_POST['Docent']; 
  $leerlingnmr = $_POST['Leerlingnmr']; 
  $datum=date('d-m-Y');

  
  

  $sql = "INSERT INTO `uitleen`(`Docent`, `Naam`, `Apparaat`,`Uitleendatum`, `Inleverdatum`) VALUES ('$docent', '$leerlingnmr', '$apparaat', '$datum', '$retouneerdatum' )";
  $insert = $conn->query($sql);


 
  if ($insert)  {

    $sql4 = "UPDATE `apparaten` SET `status`=0 WHERE Apparaatnaam='$apparaat'";
    $update = $conn->query($sql4);

    if ($update)  {
      header("location:/Uitleenregistratiesysteem/Apparaten%20overzicht.php#");
  
    }}}
?>