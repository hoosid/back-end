<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(!$_SESSION['mdp']){
    header('location :sec.php');
}
if(isset($_POST['envoi'])){
if (!empty($_POST['titre']) and  !empty($_POST['description'])){
$titre =htmlspecialchars($_POST['titre']); //pour ne entré pas des scripte comme code html
$description =nl2br(htmlspecialchars($_POST['description']));//nl2br pour sout de ligne on scripte

$inserarticle =$bdd->prepare('INSERT INTO `article`( `titre`, `description`) VALUES (?,?)');
 $inserarticle->execute(array($titre , $description));

// echo "l'article a bien été envoiyé";
header('location:ajoute-article.php');
}else{
    echo "Veuillez compléter tous les champs...";
}


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

    <form action="" method="post">
        <input type="text" name="titre" id="">
        <br>
        
        <br>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="click" name="envoi"> 


    </form>
</body>
</html>