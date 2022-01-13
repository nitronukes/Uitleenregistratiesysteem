<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Uitleenoverzicht</title>
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="Uitleenoverzicht.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
  <div class="wrapper">
    <nav>
      <div class="content">
      <div class="logo"><a href="#">Rocfriesepoort</a>
      </div>
        <ul class="links">
          <li><a href="login.php">Loguit</a></li>   
          <li><a href="#">Uitleenoverzicht</a></li>
          <li><a href="Apparaten overzicht.php">Apperatuuroverzicht</a></li>
      </div>
    </nav>
  </div>

    <?php
    
//connectie maken met de database 
include 'configure.php';

session_start();
//info uit de database halen
$sql = "SELECT `Naam`, `Docent`, `Apparaat`, `uitleendatum`, `inleverdatum` FROM uitleen";
$result = $conn->query($sql);
//header van de tabel
echo "
<br><br><br><br><br><br><br><br>
<div class='table-wrapper'>
    <table class='fl-table'>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Docent</th>
            <th>Apparaat</th>
            <th>Uitleendatum</th>
            <th>Inleverdatum</th>
            <th>inleveren</th>

        </tr>
        </thead>
        <tbody>";
   
        
 
 if ($result) {
    foreach ($result as $row) {
    //body van de tabel

    echo "
    <tr>
        <td>" . $row['Naam']  . "</td>
        <td> " . $row['Docent'] .  "</td>
        <td>" . $row['Apparaat'] . "</td>
        <td>" . $row['uitleendatum'] . "</td>
        <td>". $row['inleverdatum'] . "</td>
        <td> <a style='color:green; font-size: 1.2em'; class='fas fa-file-upload knop' href='?apparaat=" . $row['Apparaat'] . "#myForm'></a> </td>

     

    <tbody>

  ";
 

echo'
<div class="form-popup" id="myForm">
  <form action="" method="POST" class="Lever-in">


   <textarea class="opmerking" placeholder="Opmerking" name="opmerking" ></textarea> <br> <br> <br>

    <button name="submit" class="leverinknop">Lever in</button>
    <a type="button" class="sluitknop" href="/Uitleenregistratiesysteem/Uitleenoverzicht.php#">&times;</a>
  </form>
</div>

</body>
</html>

  ';


if (isset($_POST['submit'])) {

  $opmerking=$_POST['opmerking'];
  $apparaat= $_GET['apparaat'] ;



  $sql = "UPDATE `apparaten` SET `opmerking`='$opmerking',`status`=1 WHERE Apparaatnaam='$apparaat'";
    
  $update = $conn->query($sql);

  if ( $update ) {

    $sql3 = "DELETE FROM `uitleen` WHERE `Apparaat`='$apparaat'";
    $delete = $conn->query($sql3);

      if ( $delete ) {
        header("location:/Uitleenregistratiesysteem/Uitleenoverzicht.php#");

  }}}}}
?>


