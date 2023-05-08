<?php
    require 'template/database.php';


    $insert=$database ->prepare("INSERT INTO twitoon(pseudo,mail,mdp,nom,photo) VALUES (:pseudo,:mail,:mdp,:nom,:photo)");
    $insert->execute(
        [
            "pseudo" =>$_POST['pseudo'],
            "mail"=>$_POST['mail'],
            "mdp"=>$_POST['mdp'],
            "nom" =>$_POST['nom'],
            "photo"=>$_POST['photo']
        ]
    );
header("Location: index.php");
?>