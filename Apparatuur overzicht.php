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
    <div class="apparatencontainer">
        <div class="nested">
            <div>Apparaat naam</div>
            <div>Afbeelding</div>
<<<<<<< HEAD
            <div>
                <p>Leen uit</p>
=======
            <div> 
                <button class="open-button" onclick="openForm()">Leen uit</button>
>>>>>>> 1209590b537ac8cd2d93949f868307296382b924
                <p>Beschikbaar</p>
            </div>
        </div>
        <div class="nested">
            <div>Apparaat naam</div>
            <div>Afbeelding</div>
            <div>
                <button class="open-button" onclick="openForm()">Leen uit</button>
                <p>Beschikbaar</p>
            </div>
        </div>
        <div class="nested">
            <div>Apparaat naam</div>
            <div>Afbeelding</div>
            <div>
                <button class="open-button" onclick="openForm()">Leen uit</button>
                <p>Beschikbaar</p>
            </div>
        </div>
    </div>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  width: 20%;
  border-radius: 5px ;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  border: 3px solid black;
  left: 40%;
  top: 20%;
  width: 20%;
  
}

/* Add styles to the form container */
.form-apparaten-overzicht {
  width: 100%;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-apparaten-overzicht input[type=text], .form-apparaten-overzicht input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


/* Set a style for the submit/login button */
.btn-AO {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.btn-cancel-AO {
    background-color: red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add some hover effects to buttons */
.btn-cancel-AO:hover, .btn-AO:hover {
  opacity: 1;
}
</style>
</head>
<body>
    
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