<?php 
    include "contact1.php" ;

    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $sql="INSERT INTO `info`(`username`,`prenom` ,`email`, `mobil`, `passeword`) 
    VALUES ('$name',$prenom,'$email','$mobile','$password')";
    $res=mysqli_query($con,$sql);

   }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>signup</title>
</head>

<body>
    <form action="user.php" style="border:1px solid #ccc" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label ><b>username</b></label>
            <input type="text" placeholder="Enter Email" name="name" required>

            <label ><b>username</b></label>
            <input type="text" placeholder="Enter Email" name="prenom" required>


            <label ><b>email</b></label>
            <input type="password" placeholder="Enter Password" name="email" required>

            <label ><b>mobile</b></label>
            <input type="number" placeholder="Repeat Password" name="mobile" required>

            <label>
            <input type="password" checked="checked" name="password" style="margin-bottom:15px"><b>password</b>
          </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" name="submit">Sign Up</button>
            </div>
        </div>
    </form>
</body>

</html>