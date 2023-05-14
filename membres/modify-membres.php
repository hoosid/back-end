<?php 
include "../cont-data/contactt.php";
$id=$_GET['id_meb'];
if (isset($_POST['envoi'])){
    
    $titre = $_POST['titre'];
    $prenom=$_POST['prenom'];
    $description = $_POST['description'];//niveau
    $email=$_POST['email'];
    $type1=$_POST['type1'];
    $sql = "UPDATE `membres` SET  type1='$type1',nom='$titre', prenom='$prenom', niveau='$description', email='$email' WHERE id_meb='$id'";

    $result = mysqli_query($con, $sql);
    
    if($result){
        header('Location: ajoute-membres.php');
        exit;
    } else {
        die(mysqli_error($con));
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
<label for="">type</label>
        <input type="text" name="type1" id="" >
        <br>
        <label for="">nome</label>
        <input type="text" name="titre" id="">
        <br>
        <label for="">prenom</label>
        <input type="text" name="prenom" id="">
        <br>
        
        <label for="">niveau</label>
        <input name="description" id="" cols="30" rows="10">
        <br> <label for="">email</label>
        <input type="text" name="email" id="">
        <br>
        <input type="submit" value="Update" name="envoi"> 
    </form>
</body>
</html>
