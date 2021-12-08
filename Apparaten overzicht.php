<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparaten overzicht</title>
    <style>
        /* Algemene kenmerken van het grid */
        .grid {
            display:grid;
            grid-template-columns: 1fr ;
        grid-column-gap: 5%;
        /*grid-gap:5%; */
        grid-auto-rows: minmax(50px, auto) /*De minimum hoogte is 50px en het word groter als er iets in zit dat groter is dan 50px */
    }

    @media screen and (min-width: 500px) {
        .grid {
            display:grid;
            grid-template-columns: 1fr 1fr;
            grid-column-gap: 5%;
            /*grid-gap:5%; */
            grid-auto-rows: minmax(50px, auto) /*De minimum hoogte is 50px en het word groter als er iets in zit dat groter is dan 50px */
        }
    }

    @media screen and (min-width: 700px) {
        .grid {
            display:grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-column-gap: 5%;
            /*grid-gap:5%; */
            grid-auto-rows: minmax(50px, auto) /*De minimum hoogte is 50px en het word groter als er iets in zit dat groter is dan 50px */
        }
    }
    /* De inhoud van een 'cell' (cell is een van de blokjes van het grid) */
    .nested{
        display:grid;
        grid-template-rows: 2fr 200px 2fr;
        justify-items: center;
    }

    .nested > div{
        border: 4px solid black;
        border-top: 2px solid black;
        border-bottom: 2px solid black;
        width: 100%;
        text-align: center;
    
    }

    /* Algemene kenmerken van de divs in het grid (em is alle zijden) */
    .grid > div{
        background: #808080;
        padding: 1em;
    }
    
    /* Een odd element heeft een andere kleur groen (4 ^ Normaal, 2 V oddkleur)*/
    .grid > div:nth-child(odd){
        background: #595959;
    }


    </style>
</head>
<body>
    <div class="grid">
        <div class="nested">
            <div>Apparaat naam</div>
            <div>Afbeelding</div>
            <div>Leen uit</div>
        </div>
        <div class="nested">
            <div>Apparaat naam</div>
            <div>Afbeelding</div>
            <div>Leen uit</div>
        </div>
        <div class="nested">
            <div>Apparaat naam</div>
            <div>Afbeelding</div>
            <div>Leen uit</div>
        </div>
    
    </div>
</body>
</html>