<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Table de multiplication</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td, th {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h1 style="font-style:italic; font-size:32px; color:red; text-align:center; font-weight:bold">
    Table de multiplication
</h1>

<table>
    <!-- Première ligne (en-tête) -->
    <tr>
        <th>x</th>
        <?php
        for ($j = 1; $j <= 9; $j++) {
            echo "<th>$j</th>";
        }
        ?>
    </tr>

    <?php
    // Lignes
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";

        // Colonnes
        for ($j = 1; $j <= 9; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>