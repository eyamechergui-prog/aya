<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="font-weight:bold;font-size:32px;text-align:center; color:red;">"Calcul sur les variables "</h1>
    <?php
        $TVA=0.20;
        $prix=150;
        $nombrearticles=10;
        $HT=$prix*$nombrearticles;
        $TTC=$HT*(1+$TVA);
        echo"le montant HT est".$HT."<br>";
        echo"le montant TTC est".$TTC."<br>";

    ?>

</body>
</html>