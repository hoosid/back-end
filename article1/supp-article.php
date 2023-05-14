<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(isset($_GET['id_art']) and !empty($_GET['id_art'])){    //virefier si idantifer a uter enter
    $getid=$_GET['id_art'];
    $recupid=$bdd->prepare('SELECT * FROM article WHERE id_art =?');
    $recupid->execute(array($getid));
    if($recupid->rowCount()>0){
   
   $bannirid=$bdd->prepare('DELETE FROM article WHERE  id_art=?');
   $bannirid->execute(array($getid));
   header('location:ajoute-article.php');



}else {
    echo "Aucun idantifer n'a été trouvé";
}
}else{
    echo "user name n'a pas ete recuperé";
}


?>