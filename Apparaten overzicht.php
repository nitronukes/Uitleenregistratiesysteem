<?php

Include "header.html";
Include "configure.php";
$retouneerdatum = $_POST['Retouneer']; 
$sql = "INSERT INTO `uitleen`(`Docent`, `Naam`, `Inleverdatum`) VALUES (?,?,?)";

if (isset($_POST['Docent'], $_POST['Leerlingnmr'], $_POST['Retouneer'])) {
$insert = $conn ->prepare($sql);
$insert->bind_param('sss', $_POST['Docent'], $_POST['Leerlingnmr'], $_POST['Retouneer']);

//steefan
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

    <input type="text" placeholder="Retouneer datum" name="Retouneer" required>

    <button type="submit" class="btn-AO">Leen uit</button>
    <a type="button" class="btn-cancel-AO" href="#">Sluit</a>
  </form>
</div>



</body>
</html>