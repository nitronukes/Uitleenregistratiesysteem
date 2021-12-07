<?php
echo
'<table class="content-table">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Docent</th>
                <th>Apparaat naam</th>
                <th>Uitleendatum</th>
                <th>Inleverdatum</th>
            </tr>
        </thead>';

        $mysqli = new mysqli("localhost","root","","uitleenregistratiesysteem");
        if ($mysqli -> connect_errno) {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
          exit();
        }

        $sql = "SELECT * FROM leners";

        id ($result = $mysqli->query($sql)) {
            foreach ($result as $row) {
                echo "
                <tr>
                    <td>" . $row[Naam]"</td>
                    <td>Docent</td>
                    <td>Apparaat naam</td>
                    <td>Uitleendatum</td>
                    <td>Inleverdatum</td>
                </tr>";

        }}
?>