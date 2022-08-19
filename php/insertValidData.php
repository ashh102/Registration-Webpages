<?php
	if ($isValid) {
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName,
			address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, 
			dateOfBirth)
			VALUES (:userName, :password, :firstName, :lastName, :address1,
			:address2, :city, :state, :zipCode, :phone, :email,
			:gender, :maritalStatus, :dateOfBirth)");
			$sql->bindParam(':userName', $userName);
			$sql->bindParam(':password', $passWord);
			$sql->bindParam(':firstName', $firstName);
			$sql->bindParam(':lastName', $lastName);
			$sql->bindParam(':address1', $addr);
			$sql->bindParam(':address2', $addr2);
			$sql->bindParam(':city', $city);
			$sql->bindParam(':state', $state);
			$sql->bindParam(':zipCode', $zip);
			$sql->bindParam(':phone', $phone);
			$sql->bindParam(':email', $email);
			$sql->bindParam('gender', $gender);
			$sql->bindParam('maritalStatus', $marry);
			$sql->bindParam('dateOfBirth', $birth);
			
			$sql->execute();

			$last_id = $conn->lastInsertId();
			$_SESSION["last_id"] = "$last_id";
			
			$URL="confirmation.php";
			echo"<script type='text/javascript'>document.location.href='{$URL}';</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
		}
		catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();;
		}
		$conn = null;
	}
?>