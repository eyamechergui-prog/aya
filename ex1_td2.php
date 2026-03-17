<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $panier=["pomme","banane","cerise"];
        array_push($panier,"orange");
        array_push($panier,"fraise");
        array_pop($panier);
        sort($panier);
        print_r($panier);
        $notes=[12,18,5,14,20,9,11];
        //print_r($notes);
        array_sum($notes);
        //echo"la somme des notes est ".array_sum($notes)."<br>"; 
        $moyenne=array_sum($notes)/count($notes);
        echo"le nombre de notes présentes dans le tableau est ".count($notes)."<br>";
        sort($notes);
        //print_r($notes);



    ?>
</body>
</html>