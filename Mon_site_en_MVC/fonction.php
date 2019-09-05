<?php
// FONCTION QUI RECUPERE LES ARTICLES

function getArticles()
{
    
    $bdd = new PDO('mysql:host=localhost;dbname=uninumeris;charset=utf8', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $req = $bdd->query('SELECT id, title, date FROM articles ORDER BY id DESC');
    $req->execute();
    $data = $req->fetcAll(PDO::FETCH_OBJ);
    return $data;
}

$articles = getArticles();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uninumeris</title>
</head>
<body>
<header>
    <h1><a href="index.php">Mon Portofolio</a></h1>
    <p>Bienvenue</p>
</header>


    <?php
    // AFFICHAGE DES ARTICLE
    foreach($articles as $articles): 
    ?>
    <h2><? $article->title ?>=</h2>
    <time><?= $article->date ?></time
    <?php endforeach; ?>
    
    ?>
</body>
</html>