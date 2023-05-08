<?php require"template/database.php";

$requete = $database->prepare("SELECT * FROM tweet ORDER BY date DESC ");
$requete->execute();
$tweet = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
</head>
<body>
<div>
<a href="inscription.php">Inscrit toi</a>
</div>
<a href="tweet.php">Tweet</a>
<div>
    <form class="form" method="GET" action="resultat.php">
        <input type="text" name="motcle" placeholder="rechercher">
    </form>
</div>



<?php foreach ($tweet as $tweet ) {?>

<h1><?= $tweet['contenu'] ?></h1>
<p><?= $tweet['date']?></p>

    <form action="delete.php" method="POST">
    <input type="hidden" name="supp"value="<?=$tweet['id']?>">
    <button type="submit">Supp!!</button>
</form>  
<?php } ?>     
</body>
</html>
