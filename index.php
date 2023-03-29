
<?php
     
	 error_reporting(0);
	 session_start();
	 session_destroy();

	 if($_SESSION['message'])
	 {
		$message=$_SESSION['message'];

		echo "<script type='text/javascript'>

		alert('$message')

		</script>";
	 }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    <nav>
		<label class="logo">Cathedral School</label>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>


	<div class="section1">
		
		<label class="img_text">We Teach Students With Care</label>
		<img class="main_img" src="school_management.jpg">
	</div>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="welcome_img" src="school2.jpg">
				
			</div>

			<div class="col-md-8">

				<h1>Welcome to Cathedral College</h1>

				<p>Cathedral College was founded in 1989 by His Lordship Rt. Rev. Frederick D’ Souza (Bishop of Jhansi) and is managed by the Catholic Diocese of Jhansi Education Society. <br>  It aims at the holistic development of the child; spiritual, moral, mental, emotional, physical and social and the formation of an upright citizen and a perfect gentleman. Hence the College program is planned in terms of needs arising from such a development. In the Catholics, this education is given a religious basis. <br> It thus endeavors to contribute to the necessary transformation of the prevailing social conditions. This transformation as understood by it envisages that the principles of social justice, equality of opportunity, genuine freedom and respect for religious and moral values enshrined in the Constitution of India shall prevail and that all live in keeping with their human dignity and self- respect. <br></p>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1>Our Teachers</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="teacher1.jpg">

				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="teacher2.jpg">
				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="teacher3.jpg">
				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>
			

		</div>
		

	</div>






	<center>
		<h1>Our Courses</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="web.jpg">
				<h3>Web Development</h3>
				
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="graphic.jpg">
				<h3>Graphics Design</h3>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="marketing.png">
				<h3>Marketing</h3>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1 class="adm">Admission Form</h1>

	</center>


	<div align="center" class="admission_form">

		<form action="data_check.php" method="POST">
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
		</div>

		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email">
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt" name="message"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
		</div>


		</form>
		
	</div>


	<footer>
		<h3 class="footer_text">All @copyright reserved by adnan ansar</h3>
	</footer>



</body>
</html>