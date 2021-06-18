<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/connexion.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>CONNEXION</title>
</head>

<body id="bg">
    <?php require_once'./templates/header.php'?>

    <fieldset>
        <legend>Se connecter</legend>
        <form action="./controllers/login.php" method="POST">

            <div class="champ">
                <label for="login">Entrez votre login :</label>
                <input type="text" id="login" name="login" placeholder="Votre login">
                
                <label for="password">Entrez votre mot de passe :</label>
                <input type="password" id='password' name='pwd' placeholder="Votre mot de passe">
            </div>
           
            <button type="submit">Se connecter</button>
        </form>
    </fieldset>

</body>

</html>