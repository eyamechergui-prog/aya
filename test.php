<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_Get['error']) >
        <p style="color: red;"><?php echo $_GET['error']; ?></p>

    ?>
   <form action="ex1.php" method="post">
        <label for="login">mdp :</label>
        <input type="text" id="login" name="login" required>

        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required>

        <button type="submit">Se connecter</button>
        <button type="reset">Annuler</button>
  </form>
</body>
</html>