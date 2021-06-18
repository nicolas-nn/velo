<?php session_start();

$users = [
    [
        'name' => 'gravel',
        'password' => '0000',
    ],
    [
        'name' => 'route',
        'password' => '1111'
    ],
];

foreach ($users as $user) {
    if ($_POST['login'] == $user['name'] && $_POST['pwd'] == $user['password']) {
        $_SESSION['pseudo'] = $_POST['login'];   
        $_SESSION['isConnected'] = true;       
        header('Location: /profil.php');
        exit();
    }
}

header('Location: /connexion.php');
exit();