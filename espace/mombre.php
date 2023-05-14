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
    <!---afficher les mombre-->
<?php 
$users=$bdd->query('SELECT * FROM  contact');
while($use=$users->fetch()){
    ?>
    <!-- echo or ?= -->                                <!-- suup les info de user -->
    <p><?= $use['usrename']; ?><a href="bannir.php?usrename=<?=$use['usrename'];?>"
    style="color:red;">delete le mombre</a></p>

<?php
}
?>
    <!----fin afficher les mombre-->
</body>
</html>