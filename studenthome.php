
<?php

session_start();

if(!isset($_SESSION['username']))
{
	header("location:login.php");
}


elseif($_SESSION['usertype']=='admin')
{
	header("location:login.php");
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>

    <link rel="stylesheet" type="text/css" href="admin.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
    
      
<header class="header">
		
		<a href="">Student Dashboard</a>

		<div class="logout">
			
			<a href="logout.php" class="btn btn-primary">Logout</a>

		</div>

	</header>


	<aside>
		
		<ul>
			
			<li>
				<a href="">My Courses</a>
			</li>

			<li>
				<a href="">My results</a>
			</li>


		</ul>


	</aside>


	<div class="content">
		
		<h1>Principal's Message</h1>

		<p>My Dear Parents and well wishers , First and foremost, I think the Almighty God for showering his blessings continuously upon our school, teachers, parents and children. As the students receive the light of wisdom and knowledge the ignorance of darkness disappears. The school provides an enriching environment to enable the children to apply the concept, knowledge and skills. It also nurtures moral values, talents and personality of young children. Education in a changing world plays a vital role in ...</p>

		<input type="text" name="">


	</div>  

</body>
</html>