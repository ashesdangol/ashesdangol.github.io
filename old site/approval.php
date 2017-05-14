
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Spark Children Home</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.css">
		<link href="css/bootstrap.icon-large.min.css" rel="stylesheet">

	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner"> 
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-th-list"></span>
					</a>
					<a href="index.html" class="brand">Spark Children Home</a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right"> 
							<li class="active"><a href="index.html">HOME</a></li>
							<li><a href="sparkKids.html">SPARK KIDS</a></li>
							<li><a href="photoGallery.html">GALLERY</a></li>
              				<li><a href="getInvolved.html">GET INVOLVED</a></li>
              				<li><a href="contactUs.php">CONTACT</a></li>
              				<li><a href="donate.html">DONATE</a></li>
              				<li><a href="aboutUs.html">ABOUT US</a></li>
              				<li><a href="feedback.php">FEEDBACK</a></li>
						</ul>	
					</div>
				</div>
			 </div>
		</div> 
		<br>
		<br>
		<br>

		<form class="form-inline" action="approval.php" method="post">
			<?php
				if(isset($_POST['submit'])){
					$con=mysqli_connect("127.0.0.1","root","password","sparkChildrenHome");

				// Check connection
					if (mysqli_connect_errno())
  					{
  						echo "Failed to connect to MySQL: " . mysqli_connect_error();
  					}
  					
  					echo "<table id='feedWidth' class='table-striped'>";
  					echo "<tr><th>ID</th><th>NAME</th><th>FEEDBACK</th><th>APPROVED</th><th>TIME</th>";

  					if (!empty($_POST['my_id'])&&($_POST['my_name']) ) 
					{
						echo $_POST['my_value'];
						$whatValue=$_POST['my_value'];
						$whatId=$_POST['my_id'];
						$updTe = "UPDATE feedbacks ".
      							 "SET APPROVED = $whatValue ".
      							 "WHERE id = $whatId" ;

						mysqli_query($con,$updTe);
						$result=mysqli_query($con, "SELECT * FROM feedbacks");
						while($row = mysqli_fetch_array($result))
						{
						echo "<tr><td>".$row['id']."</td>"."<td>".$row['NAME']."<br>"."[".$row['COUNTRY']."]"."</td>"."<td>".$row['FEEDBACK']."</td>"."<td>".$row['APPROVED']."</td></tr>";				
						}
					
					}
					else
					{
						$result=mysqli_query($con, "SELECT * FROM feedbacks");
						while($row = mysqli_fetch_array($result))
						{
						echo "<tr><td>".$row['id']."</td>"."<td>".$row['NAME']."<br>"."[".$row['COUNTRY']."]"."</td>"."<td>".$row['FEEDBACK']."</td>"."<td>".$row['APPROVED']."</td></tr>";				
						}

					}
  					
					

					mysqli_close($con);
					echo "</table>";
				}
				?>
			
  <input type="text" name="my_id" class="input-large" placeholder="id">
  <input type="text" name="my_name" class="input-large" placeholder="Name">
  <SELECT name="my_value">
  	<OPTION Value="0">0</OPTION>
	<OPTION Value="1">1</OPTION>
  </SELECT>
  
  <button name="submit" type="submit" class="btn">UPDATE</button>
</form>

		
		<br />
		<div class="colorContainer">
			<div class="row-fluid"> 
				<div class="span4">
				<b><p> Spark Children Home <br />Hariharbhawan, Lalitpur <br />P.O Box: 285, Patan Dhoka <br />Email: spark.chhome@gmail.com</p></b>
				</div>

				<div class="span6"><br /><br /><p>Copyright © Spark Children Home, 2013. All rights reserved.</p>
				</div>

				<div class="span2"> <a href="https://www.facebook.com/pages/Spark-Children-Home/219414931464474" target="_blank"><i class="icon-large icon-facebook"></i></a>
				<a href="http://www.youtube.com/watch?v=d5yEl3voVJ8" target="_blank"><i class="icon-large icon-youtube"></i></a>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
