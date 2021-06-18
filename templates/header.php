<?php session_start();?>
<header>
    <nav>
        <ul>
            <li><a href="index.php">ACCUEIL</a></li>
           
            <?php if (isset($_SESSION['isConnected'])): ?>
                <li>Bonjour, <?= ucwords($_SESSION ['pseudo']);?> !</li>
                <li><a href="./profil.php">PROFIL</a></li>
                <li><a href="controllers/logout.php">DECONNEXION</a></li>
            <?php else: ?>
                <li><a href="connexion.php">CONNEXION</a></li>
            <?php endif ?>
       </ul>
    </nav>
</header>