
<?php
require 'template/database.php';

    $insert=$database ->prepare("INSERT INTO tweet(contenu) VALUES (:tweet)");
    $insert->execute(
        [
             "tweet" =>$_POST['tweet'],
        ]
        );

header("Location: index.php");
?>