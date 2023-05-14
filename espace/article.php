<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(!$_SESSION['mdp']){
    header('location :sec.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $y=$bdd->query('SELECT * FROM article');
    while ($article =$y->fetch()){
        ?>
        <div style="border: 1px solid black;">
            <h1><?=$article['titre']; ?></h1>
        
        <br>
        <p><?=$article['description']; ?></p>
        <a href="supp-article.php?titre=<?=$article['titre']; ?>"><button>supprimer l'article</button></a>
   
        </div>
        
        <?php
    }
    ?>
</body>
</html>