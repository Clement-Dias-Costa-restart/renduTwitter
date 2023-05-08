<?php require"template/database.php";

$motcle=$_GET['motcle'];
$requete = $database->prepare('SELECT * FROM tweet WHERE contenu LIKE "%' .$motcle.'%" ORDER BY date DESC' );
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
<a href="index.php">acceuil</a>
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
