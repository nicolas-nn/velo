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

//$_SESSION['type'] = $velos[0]['type'];   
//$_SESSION['pneu']= $velos[0]['pneu'];
//$_SESSION['isBike'] = true; 

    if ($_POST['case1'] === 'oui') {
        $_SESSION['isBike'] = true; 
        $_SESSION['type'] = $velos[0]['type'];  
        $_SESSION['pneu']= $velos[0]['pneu'];
    }
    else if ($_POST['case2'] === 'oui'){
        $_SESSION['isBike'] = true; 
      $_SESSION['type'] = $velos[1]['type'];  
    $_SESSION['pneu']= $velos[1]['pneu'];
    };
              
        //header('Location: ../profil.php');
        //exit();
   // }
//}
//var_dump($_SESSION);


//header('Location: ../profil.php');