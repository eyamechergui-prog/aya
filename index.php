<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2 style='text-align: center; font-weight: bold;'>Bienvenue en php</h2>";
        $nom="Mohamed Koutheir Ben Ghazi";
        echo"$nom <br>";
        trim($nom);
        echo"nom :$nom <br>";
        $nom1=strtoupper($nom);
        echo"la chaine en majuscule est: $nom1 <br>";
        $nom2=strtolower($nom);
        echo"la chaine en minuscule est: $nom2 <br>"; 

    ?>
</body>
</html>