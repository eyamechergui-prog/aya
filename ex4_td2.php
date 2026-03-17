<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            $emails = [
                "ahmed556@yahoo.fr",
                "contact@google.com",
                "test.user@google.com",
                "admin@hotmail.fr",
                "info@google.com",
                "support@hotmail.fr" 
            ];
            echo"<pre>";
            foreach($emails as $email){
                $c=explode("@",$email);
                print_r($c);
            }
            echo"</pre>";
     ?>   
</body>
</html>