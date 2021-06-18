<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/profil.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFIL</title>
</head>
<body>
    <?php require_once 'templates/header.php' ?>
    <h1>Votre profil</h1>
    <section>
        <div>
            <?php if(isset($_SESSION['isConnected'])):?>
                <?php if($_SESSION['pseudo']=='gravel'):?>
                    <img src="./images/gravel.jpg" alt="velo gravel"> 
                <?php elseif($_SESSION['pseudo']=='route'): ?>
                    <img src="./images/route.jpg" alt="velo de route">
                <?php endif?>  
            <?php else: ?>
                <p>Vous devez être connecté !</p>
            <?php endif?>
        </div>
        <div>
            <form action="controllers/administration.php" methode="POST">

            <label for="case1">Cochez pour afficher le type de vélo</label>
            <input type="checkbox" name="case1" id="case1" value="oui" ><br>


            <label for="case2">Cochez pour afficher la taille des roues</label>
            <input type="checkbox" name="case2" id="case2" value="oui">

            <button type="submit">Valider</button>

            
            </form>
        </div>
       
            <?php if(isset($_SESSION['isBike'])):?>
             <div>    
                <p>Le type de vélo est <?= $_SESSION['type']?>.</p>          
                <p>La taille de roue est <?= $_SESSION['pneu']?>.</p>
                
             </div>
            <?php endif?>
       
    </section>


    
</body>
</html>