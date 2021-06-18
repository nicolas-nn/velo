<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL</title>
</head>
<body>
    <?php require_once 'templates/header.php' ?>
    <h1>Votre profil</h1>
    <?php if(isset($_SESSION['isConnected'])):?>
        <?php if($_SESSION['pseudo']=='gravel'):?>
            <img src="./images/gravel.jpg" alt=""> 
        <?php elseif($_SESSION['pseudo']=='route'): ?>
            <img src="./images/route.jpg" alt="">
        <?php else: ?>
            <img src="https://www.journaldugeek.com/content/uploads/2021/01/dragon-ball-4995675-1280-640x492.jpg" alt="">
        <?php endif?>  
    <?php else: ?><p>Vous devez être connecté !</p>
    <?php endif?>
    
</body>
</html>