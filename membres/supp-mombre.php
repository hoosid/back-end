<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(isset($_GET['id_meb']) and !empty($_GET['id_meb'])){    //virefier si idantifer a uter enter
    $getid=$_GET['id_meb'];
    $recupid=$bdd->prepare('SELECT * FROM membres WHERE id_meb =?');
    $recupid->execute(array($getid));
    if($recupid->rowCount()>0){
   
   $bannirid=$bdd->prepare('DELETE FROM membres WHERE  id_meb=?');
   $bannirid->execute(array($getid));
   header('location:ajoute-membres.php');



}else {
    echo "Aucun idantifer n'a été trouvé";
}
}else{
    echo "user name n'a pas ete recuperé";
}


?>