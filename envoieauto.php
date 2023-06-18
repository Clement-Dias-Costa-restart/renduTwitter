
<?php
require 'template/database.php';

    $insert=$database ->prepare("INSERT INTO tweet(contenu,tag) VALUES (:tweet,:tag)");
    $insert->execute(
        [
             "tweet" =>"je suis un tweet préparé à l'avance",
             "tag" =>"divertissement"
        ]
        );

header("Location: index.php");
?>