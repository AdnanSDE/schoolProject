
<?php

session_start();

if(!isset($_SESSION['username']))
{
	header("location:login.php");
}


elseif($_SESSION['usertype']=='student')
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
    <title>Admin Dashboard</title>

	<?php

include 'admin_css.php';

         ?>
</head>
<body>
    
<?php

include 'admin_sidebar.php';

         ?>


	<div class="content">
		
		<h1>Our Vision</h1>

		<p>Our strategy is simple: to create a place where the students become best human being for the society and most promising students can achieve their full potential.</p>

		<input type="text" name="">


	</div>

</body>
</html>