<?php
	try {
		$last_id = $_SESSION["last_id"];
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT userName, password, firstName, lastName,
			address1, address2, city, state, zipCode, phone, email, gender, maritalStatus, 
			dateOfBirth".
		" FROM registration WHERE id = :last_id");
		$stmt->bindParam(':last_id', $last_id);
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//var_dump($stmt->fetchAll()[0]);
		$assocArray = $stmt->fetchAll()[0];
		$userName = $assocArray["userName"];
		$passWord = $assocArray["password"];
		$firstName = $assocArray["firstName"];
		$lastName = $assocArray["lastName"];
		$addr = $assocArray["address1"];
		$addr2 = $assocArray["address2"];
		$city = $assocArray["city"];
		$state = $assocArray["state"];
		$zip = $assocArray["zipCode"];
		$phone = $assocArray["phone"];
		$email = $assocArray["email"];
		$gender = $assocArray["gender"];
		$marry = $assocArray["maritalStatus"];
		$birth = $assocArray["dateOfBirth"];
	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	$conn = null;
?>