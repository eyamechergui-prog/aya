<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $panier=["pomme","banane","cerise"];
    array_push($panier,"orange");
    echo"<pre>";
    print_r($panier);
    echo"</pre>";
    array_unshift($panier,"fraise");
    echo"<pre>";
    print_r($panier);
    echo"</pre>";
    array_shift($panier);
    echo"<pre>";
    print_r($panier);
    echo"</pre>";
    array_pop($panier);
    echo"<pre>";
    print_r($panier);
    echo"</pre>";
    rsort($panier);
    echo"<pre>";
    print_r($panier);
    echo"</pre>";
    
    $notes = [12, 18, 5, 14, 20, 9, 11];
    $s=0;
    foreach($notes as $e){
        $s += $e;
    }
    echo "Somme : $s <br>";
    echo" la moyenne est:".($s/count($notes))."</br>";
    echo"le nombre de notes présentes dans le tableau est".count($notes)."</br>";
    sort($notes);
    echo"<pre>";
    print_r($notes);
    echo"</pre>";

    ?>
</body>
</html>