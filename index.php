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
    <link href="style.css" rel="stylesheet">
</head>

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
    <div class="floating-btn">
        <button id="button_modal" onclick="openModal()"> <img src="formulaire-de-contact.png" alt="formulaire"></button>      
    </div>
    <script src="app.js" type="text/javascript"></script>
    <div id="modal">
    <form class="form" method="POST" action="envoi.php">
        <div>
            <input type="text" name="tweet" placeholder="tweet">
            <select name="menu1">
                <option value="animaux">animaux</option>
                <option value="sport">sport</option>
                <option value="politique">politique</politique>
                <option value="mode">mode</mode>
                <option value="divertissement">divertissement</option>
                <option value="actualité">actualité</option>

            </select>
        </div>
        <input type="submit"name=Envoyer  value="Valider"> 
    </form>
    </form>
        <button id=close onclick="closeModal()">Fermer</button>

    </div>
    
       
    </button>
<div>
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
