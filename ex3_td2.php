<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pays_population = [
            'France' => 67595000,
            'Suede' => 9998000,
            'Suisse' => 8417000,
            'Kosovo' => 1820631,
            'Malte' => 434403,
            'Mexique' => 122273500,
            'Allemagne' => 82800000,
        ];
        foreach($pays_population as $pays => $population){
            if ($population >=20000000){
                echo"le pays ".$pays." a une population >= 20 000 000 <br>";
            }
            
        }
        echo "le nombre de pays présents dans le tableau est ".count($pays_population)."<br>";
    ?>
</body>
</html>