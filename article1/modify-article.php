<?php 
include "../cont-data/contactt.php";
$id1=$_GET['id_art'];
if (isset($_POST['envoi'])){

    $titre = $_POST['titre'];
    $description = $_POST['description'];

    $sql = "UPDATE `article` SET titre='$titre', description='$description' WHERE id_art='$id1'"; 
    $result = mysqli_query($con, $sql);

    if($result){
        header('Location: ajoute-article.php');
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
        <input type="text" name="titre" id="">
        <br>
        
        <br>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Update" name="envoi"> 
    </form>
</body>
</html>
