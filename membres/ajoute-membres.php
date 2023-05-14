<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(!$_SESSION['mdp']){
    header('location :sec.php');
}
include "../cont-data/contactt.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="membre.css">
   

  
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminBLIDA</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="../espace1/admin.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="../contact/contact111.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">contact</span>
				</a>
			</li>
			<li>
            <a href="../article1/ajoute-article.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">article</span>
				</a>
			</li>
			<li>
				<a href="ajoute-membres.php">
					<i class='bx bxs-group' ></i>
					<span class="text">membres</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search..." name="search">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i>s</button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>LRDSI</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">membres</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>
				</li>
				
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"style=" width:70px;height: 35px;"><a href="http:add-mombre.php" style="color:#fff;">Add</a></button>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						
							<tr>
                            <th>id</th>
							<th>type</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>nivreau</th>
                            <th>email</th>
        
							</tr>
						</thead>
						<tbody>
                        <?php 
								if(isset($_POST['search'])){
									$search=$_POST['search'];
									$sql="select * from  `membres` where id_meb='$search' or email='$search' or nom='$search' or prenom='$search'";
									$result1=mysqli_query($con,$sql);
									if($result){
									if($num=mysqli_num_rows($result1)>0){
									
										$row1=mysqli_fetch_assoc($result1);
										echo '<tbody> 
										<tr>
										  <td>'.$row1['id_meb'].'</td>
										  <td>'.$row1['type1'].'</td>
										  <td>'.$row1['nom'].'</td>
										  <td>'.$row1['prenom'].'</td>
										  <td>'.$row1['niveau'].'</td>
										  <td>'.$row1['email'].'</td>
										</tr>
										</tbody>
										
										';
									}else{
										echo "<h2 style=color:red>Data not found</h2>";
									}
								
									}
								}else{
                     $users=$bdd->query('SELECT * FROM membres');
                 while($use=$users->fetch()){
                    ?>
             <tr>
                <td>
				<?php echo $use['id_meb'] ?></td>
			    <td><?php echo $use['type1'] ?></td>
                <td><?php echo $use['nom'] ?></td>
                <td><?php echo $use['prenom'] ?></td>
                <td><?php echo $use['niveau'] ?></td>
                <td><?php echo $use['email'] ?></td>
        <td>
        <a href="modify-membres.php?id_meb=<?=$use['id_meb']; ?>"><button class="btn btn-success">Update</button></a>

            <a href="supp-mombre.php?id_meb=<?=$use['id_meb']; ?>"><button class="btn btn-danger">Delete</button></a>

        </td>
             </tr>
<?php
}}
?>
						</tbody>
					</table>
				</div>
				
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
<!---->
   
  </div>
</div>

    



  
</body>
</html>