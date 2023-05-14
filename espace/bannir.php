<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(isset($_GET['usrename']) and !empty($_GET['usrename'])){
    $getuser=$_GET['usrename'];
 $recupUse=$bdd->prepare('SELECT * FROM contact WHERE usrename= ?');
 $recupUse->execute(array($getuser));
 if($recupUse->rowCount()>0){ 

$bannirUser=$bdd->prepare('DELETE FROM contact WHERE  usrename=?');
$bannirUser->execute(array($getuser));
header('location:mombre.php');

 }else{
    echo "Aucun mombre n'a été trouvé";

    
 }

}else{
    echo "user name n'a pas ete recuperé";
}

$a =array();
?>