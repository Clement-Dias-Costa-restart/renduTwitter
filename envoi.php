

    <?php
        $tag = $_POST['menu1']
    ?>
    <?php
    require 'template/database.php';

        $insert=$database ->prepare("INSERT INTO tweet(contenu,tag) VALUES (:tweet,:tag)");
        $insert->execute(
            [
                "tweet" =>$_POST['tweet'],
                "tag" =>$tag,
            ]
            );

    header("Location: index.php");
    ?>
