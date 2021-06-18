<?php session_start();

$velos = [
    [
    'type'=>'gravier',
    'pneu'=>'700'
    ],
    [
    'type'=>'routier',
    'pneu'=>'650'    
    ]
];
//var_dump($_POST);
//$_SESSION['type'] = $velos[0]['type'];   
//$_SESSION['pneu']= $velos[0]['pneu'];
//$_SESSION['isBike'] = true; 

    if ($_POST['case1'] === 'oui') {
        $_SESSION['isType'] = true; 
            if($_SESSION['pseudo']=='gravel'){
                $_SESSION['type'] = $velos[0]['type'];}  
            else if($_SESSION['pseudo']=='route'){
                $_SESSION['type']= $velos[1]['type']; 
        }
    }
    if ($_POST['case2'] === 'oui'){
        $_SESSION['isRoue'] = true; 
        if($_SESSION['pseudo']=='gravel'){
            $_SESSION['pneu'] = $velos[0]['pneu'];
        }else if ($_SESSION['pseudo']=='route'){
            $_SESSION['pneu']= $velos[1]['pneu'];
        }
    }
    if ($_POST['case3'] === 'oui'){
        $_SESSION['cache']=true;
    }
              
header('Location: ../profil.php');
exit();



?>