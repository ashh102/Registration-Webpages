<?php
	$usernameError = $passwordError = $rePasswordError = $firstNameError = $lastNameError = $addrError = $addr2Error = $cityError = $stateError = $zipError = $phoneError = $emailError = $genderError = $marryError = $birthError = "";
	$userName = $password = $rePassword = $firstName = $lastName = $addr = $addr2 = $city = $state = $zip = $phone = $email = $gender = $marry = $birth = "";
	$isValid = false;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$isValid = true;
		
		$userName = cleanInput($_POST["Username"]);
		if (empty($userName)){
			$usernameError = "*Required field";
			$isValid = false;
		}
		else if((strlen($userName) < 6)){
			$usernameError = "*Must contain atleast 6 characters";
			$isValid = false;
			
		}
		
		$passWord = cleanInput($_POST["Password"]);
		if (empty($passWord)){
			$passwordError = "*Required field";
			$isValid = false;
		}
		else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/", $passWord)){
			$passwordError = "*Must contain an upper, lower, digit, and a special character. Must be length of atleast 8.";
			$isValid = false;
		}
		
		$rePassword = cleanInput($_POST["Retyped_Password"]);
		if (empty($rePassword)){
			$rePasswordError = "*Required field";
			$isValid = false;
		}
		else if (strcmp($passWord, $rePassword)){
			$rePasswordError = "*Password does not matched";
			$isValid = false;
		}
		
		$firstName = cleanInput($_POST["First_Name"]);
		if (empty($firstName)){
			$firstNameError = "*Required field";
			$isValid = false;
		}
		else if (!preg_match("/^[a-zA-Z]+$/", $firstName)){
			$firstNameError = "*First name must contain only letters";
			$isValid = false;
		}
		else
			$firstName = ucwords($firstName);
		
		$lastName = cleanInput($_POST["Last_Name"]);
		if (empty($lastName)){
			$lastNameError = "*Required field";
			$isValid = false;
		}
		else if (!preg_match("/^[a-zA-Z]+$/", $lastName)){
			$lastNameError = "*Last name must contain only letters";
			$isValid = false;
		}
		else
			$lastName = ucwords($lastName);
		
		$addr = cleanInput($_POST["Primary_Address"]);
		if (empty($addr)){
			$addrError = "*Required field";
			$isValid = false;
		}
		else
			$addr = ucwords($addr);
		
		$addr2 = cleanInput($_POST["Secondary_Address"]);
		if (!empty($addr2))
			$addr2 = ucwords($addr2);
		
		$city = cleanInput($_POST["City"]);
		if (empty($city)){
			$cityError = "*Required field";
			$isValid = false;
		}else
			$city = ucwords($city);
		
		$state = cleanInput($_POST["State"]);
		if (empty($state)){
			$stateError = "*Required field";
			$isValid = false;
		}
		
		$zip = cleanInput($_POST["Zipcode"]);
		if (empty($zip)){
			$zipError = "*Required Field";
			$isValid = false;
		}
		else if (!preg_match("/^\d{5}$/", $zip)){
			if (!preg_match("/^\d{5}-\d{4}$/", $zip)){
				$zipError = "*Zipcode must follow xxxxx or xxxxx-xxxx format";
				$isValid = false;
			}
		}
		
		$phone = cleanInput($_POST["Phone_Number"]);
		if (empty($phone)){
			$phoneError = "*Required field";
			$isValid = false;
		}
		else if(!preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone)){
			$phoneError = "*Phone number must follow xxx-xxx-xxxx format";
			$isValid = false;
		}
		
		$email = cleanInput($_POST["Email"]);
		if (empty($email)){
			$emailError = "*Required field";
			$isValid = false;
		}
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$emailError = "*Invalid email";
			$isValid = false;
		}
		

		$gender = cleanInput(isset($_POST["Gender"]) ? $_POST["Gender"] : null);
		if (empty($gender)){
			$genderError = "*Required field";
			$isValid = false;
		}
		
		if (isset($_POST["Marital_Status"])){
			$marry = cleanInput($_POST["Marital_Status"]);
		}
		if (empty($marry)){
			$marryError = "*Required field";
			$isValid = false;
		}
		
		$birth = cleanInput($_POST["Birthdate"]);
		if (empty($birth)){
			$birthError = "*Required field" .$birth;
			$isValid = false;
		}
		else if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $birth)){
			$birthError = "*Date must follow mm/dd/yyyy format";
			$isValid = false;
		}
	}
	
	function cleanInput($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}	
?>