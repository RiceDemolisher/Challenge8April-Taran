<?php
try {
    $db = new PDO ('mysql:host=localhost;dbname=dbchallenge;port=3306', 'root', '');
} catch (PDOException $e) {
}
/* show tables */
$result = mysql_query('SHOW TABLES',$connection) or die('cannot show tables');
while($tableName = mysql_fetch_row($result)) {

    $table = $tableName[0];

    echo '<h3>',$table,'</h3>';
    $result2 = mysql_query('SHOW COLUMNS FROM '.$table) or die('cannot show columns from '.$table);
    if(mysql_num_rows($result2)) {
        echo '<table cellpadding="0" cellspacing="0" class="db-table">';
        echo '<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default<th>Extra</th></tr>';
        while($row2 = mysql_fetch_row($result2)) {
            echo '<tr>';
            foreach($row2 as $key=>$value) {
                echo '<td>',$value,'</td>';
            }
            echo '</tr>';
        }
        echo '</table><br />';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht 2</title>
</head>

<body>
<a href="index.html">HOME</a>
<h1>Opdracht 2</h1>
<p>Schrijf een script waarmee de gegevens van alle users netjes in een tabel komen te staan. <span>Let op: zet het wachtwoord niet in de tabel.</span> Klik <a href="voorbeeld2.html">hier</a> om het voorbeeld te zien.</p>
<table>
    <!-- SCHRIJF HIER JE CODE -->
</table>
</body>

</html>