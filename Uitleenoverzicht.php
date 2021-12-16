<!DOCTYPE html>
<head>
<link rel="stylesheet" href="Uitleenoverzicht.css">

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
<div class='table-wrapper'>
    <table class='fl-table'>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Docent</th>
            <th>Apparaat</th>
            <th>Uitleendatum</th>
            <th>Inleverdatum</th>
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
    
    <tbody>
  ";
    }
}

?>
</body>
</html>