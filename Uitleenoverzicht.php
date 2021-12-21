<!DOCTYPE html>
<head>
<link rel="stylesheet" href="Uitleenoverzicht.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

</head>
<body>
    <?php
//connectie maken met de database 
include 'configure.php';

session_start();
//info uit de databse halen
$sql = "SELECT `Naam`, `Docent`, `Apparaat`, `uitleendatum`, `inleverdatum` FROM uitleen";
$result = $conn->query($sql);
//header van de tabel
echo "
<h2>Uitleenoverzicht</h2>
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
        <td> <i style='color:green;' class='fas fa-file-upload knop' onclick='openForm()'></i> </td>

     

    <tbody>

  ";
    }
}

?>
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-apparaten-overzicht">
    <h1>$apparaat</h1>


    <input type="text" placeholder="Naam Docent" name="Docent" required>

    <input type="text" placeholder="Leerlingnummer" name="Leerlingnmr" required>

    <input type="text" placeholder="Retouneer datum" name="Retouneer" required>

    <button type="submit" class="btn-AO">Leen uit</button>
    <button type="button" class="btn-cancel-AO" onclick="closeForm()">Sluit</button>
  </form>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>