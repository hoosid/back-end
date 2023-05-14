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
    <link rel="stylesheet" href="contact111.css">
   

  
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
				<a href="contact111.php">
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
				<a href="../membres/ajoute-membres.php">
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
			<form action="#" method="post">
				<div class="form-input">
					<input type="search" placeholder="Search..." name="search">
					<button type="submit" class="search-btn"><i class='bx bx-search' >S</i></button>
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">contact</a>
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
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
							<th>id</th>
                            <th>user</th>
                            <th>email</th>
                            <th>message</th>
        
							</tr>
						</thead>
						<tbody>
                        <?php 
						if(isset($_POST['search'])){
							$search=$_POST['search'];
							$sql="select * from  `contact` where id='$search' or usrename='$search' or email='$search'";
							$result=mysqli_query($con,$sql);
							if($result){
							if($num=mysqli_num_rows($result)>0){
							
								$row=mysqli_fetch_assoc($result);
								echo '<tbody> 
								<tr>
								  <td>'.$row['id'].'</td>
								  <td>'.$row['usrename'].'</td>
								  <td>'.$row['email'].'</td>
								  <td>'.$row['message'].'</td>
								</tr>
								</tbody>
								
								';
							}else{
								echo "<h2 style=color:red>Data not found</h2>";
							}
						
							}
						}else{
                     $users=$bdd->query('SELECT * FROM  contact');
                 while($use=$users->fetch()){
				 ?>
				 
             <tr>
			 <td><?php echo $use['id'] ?></td>
                <td><?php echo $use['usrename'] ?></td>
                <td><?php echo $use['email'] ?></td>
                <td><?php echo $use['message'] ?></td>
        
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
	



    



  
</body>
</html>