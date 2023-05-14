<?php 
session_start();
if(isset($_POST['submit'])){
if(empty(!$_POST['user'] and !$_POST['mdp'])){

    $pass="admin";
    $mddp="admin123";
   
    $x=htmlspecialchars_decode($_POST['user']);
    $y=htmlspecialchars_decode($_POST['mdp']);
    
    if($x==$pass and $mddp==$y){
        $_SESSION['mdp']=$mddp;
        header('location:../espace1/admin.php');
        
            

    }else{
 
        echo " <br><h3 style=color:red> voter mote passe ou pseudo est incorrect </h3>";
        
       
       
    }
 }  
    else{
        echo "<br><h3 style=color:red>veuillez compléter tout les champs...</h3>";
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    
    <title>Document</title>
</head>
<body>

      <div class="container" style="margin-left:35%;margin-top:4%" >
       
         <header>Admin </header>
         <form action="" method="post">
            <div class="input-field">
            <input type="text" name="user">
               <label>Username</label>
            </div>
            <div class="input-field">
            <input type="password" name="mdp">
               <span class="show">SHOW</span>
               <label>Password</label>
            </div>
            <div class="button">
               <div class="inner"></div>
               <button  name="submit">SUIVANT</button>
            </div>
         </form>
         
         <div class="links">
            <div class="facebook">
               <i class="facebook"><span>HOME</span></i>
            </div>
            <div class="google">
               <i class="google"><span><a href="plus-login.html">Plus</a></span></i>
            </div>
         </div>
         
      </div>
    
      <footer>

      </footer>
   </body>
</html>

    
