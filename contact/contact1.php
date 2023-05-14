<?php 

include "../cont-data/contactt.php" ;

if(isset($_POST['submit'])){
$username=$_POST['username'];       
$email=$_POST['email'];
$text=$_POST['text'];
$sql="INSERT INTO `contact`(`usrename`, `email`, `message`) 
VALUES ('$username','$email','$text')";
$res=mysqli_query($con,$sql);

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#b2').click(function(){
$('body').css({
"color":"black",
"background":"white"
});
        })
      });
      $(document).ready(function(){
      $('#b1').click(function(){
$('body').css({
"color":"white",
"background":"black"
});
        })
      });

    </script>
    <title>Document</title>
</head>
<body>
  <button id="b1" title="mode 1" >🌛</button>
  <button id="b2"title="mode2">🌞</button>-->
 
  <div class="mima">

  <img src="logo.png" alt=""></div>
  <div class="yas">
<h1><span>N</span>o<span>u</span>s <span>c</span>o<span>n</span>t<span>a</span>c<span>t</span>e<span>r</span> </h1></div>
<div class="parti1"> 
  <div class="parti11" >
  <img src="FB_IMG_16808653064255157.jpg" alt="">
  <h3>téléphone </h3>
  <p>+213(0)25272436</p></div>
  <div class="parti111" >
  <img src="FB_IMG_16808653262517647.jpg" alt="">
  <h3>adresse </h3>
  <p> BP270,Route de Soumaa 09100-Blida-Algérie</p></div>
  <div class="parti1111" >
  <img src="FB_IMG_16808653176933618.jpg" alt="">
  <h3>Mail </h3>
  <p> lrdsi@univ-blida.dz</p></div>
</div>

<div class="maps">
  <div class="ma">

<h4 style="font-size: 25px;"> Nous sommes içi </h4>
<p>lun-ven8.30Am-SPM/ téléphone est déverrouillé 24/7</p>
<br>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.9609210171618!2d2.8687072157831963!3d36.502379141706015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128f0d465a043efb%3A0x3bbb980acd4f3e7c!2sIT%20Club!5e0!3m2!1sen!2sdz!4v1680856782809!5m2!1sen!2sdz" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 </div><div class="input">
  <br>
<h4 style="font-size: 25px;"> Obtenez une évaluation de cas gratuit dés aujourd'hui!</h4>
<p>Disponible 24h/24!</p>

  

   
    <form action="contact1.php" method="post">
      <input type="text" name ="username" size="53" maxlength="265" placeholder="  votre nom" /> <br>      
          
          <input type="email"  name ="email" size="53"  maxlength="256"  placeholder="  votre mail"/>
       <br>
          <textarea name="text" cols="50" rows="5" placeholder="entrez votre message">
            
        </textarea>  <br>
        <button class="bt" name="submit"> Envoyer </button> 
    </form>
      </div>
</div>

</body>
</html>