<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $budget=1553.89;
        $achats=1554.76;
        $remise=0.05;
        $montantremise=$achats*(1-$remise);
        echo"le montant réel à payer après application de la remise est".$montantremise."<br>";
        if($montantremise>$budget){
            echo"le budget n'est pas suffisant il manque X£";
        }
        else{
            echo"le budget est suffisant pour payer les achats";
        }
        if($montantremise/$budget>0.1){
            echo"Budget confortable ";
        }
        
    ?>
</body>
</html>