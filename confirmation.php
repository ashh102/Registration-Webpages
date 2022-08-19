<!DOCTYPE html>
<?php
	include 'php/connectionInfo.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Form Submitted</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="head">
		<header>
			<h1>Web Development</h1>
		</header>
		</div>
		<?php
			include 'php/selectUserData.php';
		?>
		<div class="menu">
			<a href="./home.html" class="inactive">Home</a>
			<a href="./register.php" class="inactive" >Register</a>
			<a href="./animation.html" class="inactive" >Animation</a>
		</div>
		
		<div class="confirmation">
			<h2>Form Successfully Submitted!</h2>
			<div class="confirmGroup">
					<?php
						echo "<h3>Submission's info</h3><br>";
						echo "<label>Username: $userName</label><br>";
						echo "<label>Password: $passWord</label><br>";
						echo "<label>First Name: $firstName</label><br>";
						echo "<label>Last Name: $lastName</label><br>";
						echo "<label>Address 1: $addr</label><br>";
						if ($addr2 != "")
							echo "<label>Address 2: $addr2</label><br>";
						echo "<label>City: $city</label><br>";
						echo "<label>State: $state</label><br>";
						echo "<label>Zip Code: $zip</label><br>";
						echo "<label>Phone: $phone</label><br>";
						echo "<label>Email: $email</label><br>";
						echo "<label>Gender: $gender</label><br>";
						echo "<label>Marital Status: $marry</label><br>";
						echo "<label>Date of Birth: $birth</label><br>";
					?>
			</div>
		</div>
		
		<div class="clr"></div>
		<footer>
			<div class="footList">
				<ul>
					<li class="google"><a href="https://www.google.com" target="_blank">Go to Google</a></li>
					<li class="youtube"><a href="https://www.youtube.com" target="_blank">Go to YouTube</a></li>
					<li class="facebook"><a href="https://www.facebook.com" target="_blank">Go to Facebook</a></li>				
				</ul>
			</div>
		</footer>
	</body>
</html>