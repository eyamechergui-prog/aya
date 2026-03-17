<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tableau des mois</title>
</head>
<body>

<?php
$mois = array(
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);
?>

<h2>Nombre de jours de chaque mois</h2>

<table>
    <tr>
        <th> Mois </th>
        <th> Numéro </th>
        <th> Nombre de jours </th>
    </tr>

    <?php
    $numero = 1; 
    foreach ($mois as $nom => $jours) {
        echo "<tr>";
        echo "<td> $nom </td>";
        echo "<td> $numero </td>";
        echo "<td> $jours </td>";
        echo "</tr>";
        $numero++; 
    }
    ?>
</table>

</body>
</html>