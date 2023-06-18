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
    <link href="style.css" rel="stylesheet">
</head>
<body>
<body>
    <nav class="menu">
    <ul class="menuderoulant">
        <li class="bouton0">
            <h1 id='Titre'>Twouiteur</h1> 
            <div>
            <form class="form" method="GET" action="resultat.php">
                <input type="text" name="motcle" placeholder="rechercher">
            </form>
            </div>
            <a href='index.php'> Acceuil</a>
            <ul class="menun1">
                <li class="nv1">
                    <ul class="nv2">
                        <li><a href=inscription.php>Inscrit toi</a></li>
                    </ul>
                    <ul class="nv3">
                        <li><a href=tweet.php>Tweet</a></li>
                    </ul>
                </li>
            </ul>

        </li>
</nav>


<?php foreach ($tweet as $tweet ) {?>

<div id='tweet'>
    <h1><?= $tweet['contenu'] ?></h1>
<p><?= $tweet['date']?></p>



<button class="sup" onclick="openModal2()"> <img src="supprimer.png" alt="sup"></button>      
    <script src="app.js" type="text/javascript"></script>


</div>
    <div id="modal2">
    
        <h1>voulez-vous supprimer?</h1>
        <form action="delete.php" method="POST">
        <input type="hidden" name="supp"value="<?=$tweet['id']?>">
        <button type="submit" class="sup">Supprimer!</button>
    </form>  
    </form>
        <button id=close onclick="closeModal2()">Fermer</button>

    </div>
    <?php } ?> 
</body>
</html>
