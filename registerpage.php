<!DOCTYPE html>
<?php
	include 'php/connectionInfo.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset = "utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/validation.js"></script>
	</head>
	<body>
		<div class="heading">
      <strong> 
        <center>
          <header>
            <h1>The World of Recycling</h1>
          </header>
        </center>
      </strong>
      <div class="menu">
        <a href="./homepage.html" class="inactive">Home</a>
        <a href="#" class="active">Register</a>
        <a href="./animationpage.html" class="inactive">Animation</a>
      </div>
      <?php
        include 'php/validation.php';
      ?>
      <div class="container">
        <div class="registration">
          <form class="formFields" onsubmit="return checkForm();" method="POST" 
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="formCol1">
              <div class="formComponent">
                <label>Username</label>
                <input name="Username" type="text" id="username" maxlength="50"
                onblur="checkUsername();" value="<?php echo $userName; ?>">
                <span class="msg" id="usrMsg"><?php echo $usernameError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Password</label>
                <input name="Password" type="password" id="password" maxlength="50"
                onblur="checkPassword();" >
                <span class="msg" id="pswMsg"><?php echo $passwordError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Repeat Password</label>
                <input name="Retyped_Password" type="password" id="repeatPassword" maxlength="50"
                onblur="checkRepeatPassword();" >
                <span class="msg" id="rePswMsg"><?php echo $rePasswordError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>First Name</label>
                <input name="First_Name" type="text" id="firstName" maxlength="50"
                onblur="checkFirstName();" value="<?php echo $firstName; ?>">
                <span class="msg" id="fnMsg"><?php echo $firstNameError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Last Name</label>
                <input name="Last_Name" type="text" id="lastName" maxlength="50"
                onblur="checkLastName();" value="<?php echo $lastName; ?>">
                <span class="msg" id="lnMsg"><?php echo $lastNameError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Address line 1</label>
                <input name="Primary_Address" type="text" id="address1" maxlength="100"
                onblur="checkAddress1();" value="<?php echo $addr; ?>">
                <span class="msg" id="ad1Msg"><?php echo $addrError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Address line 2</label>
              <input name="Secondary_Address" type="text" id="address2" maxlength="100"
                onblur="checkAddress2();" value="<?php echo $addr2; ?>">
                <span class="msg" id="ad2Msg"><?php echo $addr2Error; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>City</label>
                <input name="City" type="text" id="city" maxlength="50" onblur="checkCity();" value="<?php echo $city; ?>">
                <span class="msg" id="citMsg"><?php echo $cityError; ?></span>
              </div>
              <br>
            </div>
            <div class="formCol2">
              <div class="formComponent">
                <label>State</label>
                <select name="State" id="state" onblur="checkState();" >
                  <option value="null"></option>
                  <option value="AL"> <?php echo $state == "AL" ? 'selected="selected"' : ""; ?>AL</option>
                  <option value="AK"> <?php echo $state == "AK" ? 'selected="selected"' : ""; ?>AK</option>
                  <option value="AZ"> <?php echo $state == "AZ" ? 'selected="selected"' : ""; ?>AZ</option>
                  <option value="AR"> <?php echo $state == "AR" ? 'selected="selected"' : ""; ?>AR</option>
                  <option value="CA"> <?php echo $state == "CA" ? 'selected="selected"' : ""; ?>CA</option>
                  <option value="CO"> <?php echo $state == "CO" ? 'selected="selected"' : ""; ?>CO</option>
                  <option value="CT"> <?php echo $state == "CT" ? 'selected="selected"' : ""; ?>CT</option>
                  <option value="DE"> <?php echo $state == "DE" ? 'selected="selected"' : ""; ?>DE</option>
                  <option value="FL"> <?php echo $state == "FL" ? 'selected="selected"' : ""; ?>FL</option>
                  <option value="GA"> <?php echo $state == "GA" ? 'selected="selected"' : ""; ?>GA</option>
                  <option value="HI"> <?php echo $state == "HI" ? 'selected="selected"' : ""; ?>HI</option>
                  <option value="ID"> <?php echo $state == "ID" ? 'selected="selected"' : ""; ?>ID</option>
                  <option value="IL"> <?php echo $state == "IL" ? 'selected="selected"' : ""; ?>IL</option>
                  <option value="IN"> <?php echo $state == "IN" ? 'selected="selected"' : ""; ?>IN</option>
                  <option value="IA"> <?php echo $state == "IA" ? 'selected="selected"' : ""; ?>IA</option>
                  <option value="KS"> <?php echo $state == "KS" ? 'selected="selected"' : ""; ?>KS</option>
                  <option value="KY"> <?php echo $state == "KY" ? 'selected="selected"' : ""; ?>KY</option>
                  <option value="LA"> <?php echo $state == "LA" ? 'selected="selected"' : ""; ?>LA</option>
                  <option value="ME"> <?php echo $state == "ME" ? 'selected="selected"' : ""; ?>ME</option>
                  <option value="MD"> <?php echo $state == "MD" ? 'selected="selected"' : ""; ?>MD</option>
                  <option value="MA"> <?php echo $state == "MA" ? 'selected="selected"' : ""; ?>MA</option>
                  <option value="MI"> <?php echo $state == "MI" ? 'selected="selected"' : ""; ?>MI</option>
                  <option value="MN"> <?php echo $state == "MN" ? 'selected="selected"' : ""; ?>MN</option>
                  <option value="MS"> <?php echo $state == "MS" ? 'selected="selected"' : ""; ?>MS</option>
                  <option value="MO"> <?php echo $state == "MO" ? 'selected="selected"' : ""; ?>MO</option>
                  <option value="MT"> <?php echo $state == "MT" ? 'selected="selected"' : ""; ?>MT</option>
                  <option value="NE"> <?php echo $state == "NE" ? 'selected="selected"' : ""; ?>NE</option>
                  <option value="NV"> <?php echo $state == "NV" ? 'selected="selected"' : ""; ?>NV</option>
                  <option value="NH"> <?php echo $state == "NH" ? 'selected="selected"' : ""; ?>NH</option>
                  <option value="NJ"> <?php echo $state == "NJ" ? 'selected="selected"' : ""; ?>NJ</option>
                  <option value="NM"> <?php echo $state == "NM" ? 'selected="selected"' : ""; ?>NM</option>
                  <option value="NY"> <?php echo $state == "NY" ? 'selected="selected"' : ""; ?>NY</option>
                  <option value="NC"> <?php echo $state == "NC" ? 'selected="selected"' : ""; ?>NC</option>
                  <option value="ND"> <?php echo $state == "ND" ? 'selected="selected"' : ""; ?>ND</option>
                  <option value="OH"> <?php echo $state == "OH" ? 'selected="selected"' : ""; ?>OH</option>
                  <option value="OK"> <?php echo $state == "OK" ? 'selected="selected"' : ""; ?>OK</option>
                  <option value="OR"> <?php echo $state == "OR" ? 'selected="selected"' : ""; ?>OR</option>
                  <option value="PA"> <?php echo $state == "PA" ? 'selected="selected"' : ""; ?>PA</option>
                  <option value="RI"> <?php echo $state == "RI" ? 'selected="selected"' : ""; ?>RI</option>
                  <option value="SC"> <?php echo $state == "SC" ? 'selected="selected"' : ""; ?>SC</option>
                  <option value="SD"> <?php echo $state == "SD" ? 'selected="selected"' : ""; ?>SD</option>
                  <option value="TN"> <?php echo $state == "TN" ? 'selected="selected"' : ""; ?>TN</option>
                  <option value="TX"> <?php echo $state == "TX" ? 'selected="selected"' : ""; ?>TX</option>
                  <option value="UT"> <?php echo $state == "UT" ? 'selected="selected"' : ""; ?>UT</option>
                  <option value="VT"> <?php echo $state == "VT" ? 'selected="selected"' : ""; ?>VT</option>
                  <option value="VA"> <?php echo $state == "VA" ? 'selected="selected"' : ""; ?>VA</option>
                  <option value="WA"> <?php echo $state == "WA" ? 'selected="selected"' : ""; ?>WA</option>
                  <option value="WV"> <?php echo $state == "WV" ? 'selected="selected"' : ""; ?>WV</option>
                  <option value="WI"> <?php echo $state == "WI" ? 'selected="selected"' : ""; ?>WI</option>
                  <option value="WY"> <?php echo $state == "WY" ? 'selected="selected"' : ""; ?>WY</option>
                </select>
                <span class="msg" id="stateMsg"><?php echo $stateError; ?></span>
              </div>
              <br>	
              <div class="formComponent">
                <label>Zip Code</label>
                <input name="Zipcode" type="text" id="zipCode" maxlength="10"
                onkeyup="zipFormat();" onblur="checkZip();" value="<?php echo $zip; ?>"> 
                <span class="msg" id="zipMsg"><?php echo $zipError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Phone Number</label>
                <input name="Phone_Number" type="text" id="phoneNumber" maxlength="12"
                onkeyup="phoneFormat();" onblur="checkPhone();" value="<?php echo $phone; ?>">
                <span class="msg" id="phoneMsg"><?php echo $phoneError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Email</label>
                <input name="Email" type="email" id="emailBox"
                placeholder="x@x.x" onblur="checkEmail();" value="<?php echo $email; ?>">
                <span class="msg" id="emailMsg"><?php echo $emailError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Gender</label>
                <div id="genderBox">
                  <input name="Gender" type="radio" id="genderMale" value="Male">
                    <?php if (isset($gender) && $gender=="Male") echo "checked";?>Male<br>
                  <input name="Gender" type="radio" id="genderFemale" value="Female">
                    <?php if (isset($gender) && $gender=="Female") echo "checked";?>Female<br>
                  <input name="Gender" type="radio" id="genderOther" value="Other"?>
                    <?php if (isset($gender) && $gender=="Other") echo "checked";?>Other<br>
                </div>
                <span class="msg" id="genderMsg"><?php echo $genderError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label >Marital Status</label>
                <div id="marryBox">
                <input name="Marital_Status" type="radio" id="married" value="Married">
                  <?php if (isset($marry) && $marry=="Married") echo "checked"; ?>Married<br>
                <input name="Marital_Status" type="radio" id="single" value="Single">
                  <?php if (isset($marry) && $marry=="Single") echo "checked"; ?>Single<br>
                </div>
                <span class="msg" id="marryMsg"><?php echo $marryError; ?></span>
              </div>
              <br>
              <div class="formComponent">
                <label>Birth Date</label>
                <input name="Birthdate" type="date" id="birthDate" value="<?php echo $birth ?>" onblur="checkBday();">
                <span class="msg" id="birthMsg"><?php echo $birthError; ?></span>
              </div>
              <br>
              <input class="button" type="submit" name="Submit" value="Submit">
              <input class="button" type="reset" name="Reset" value="Reset">
            </div>
          </form>
          <?php
            include 'php/insertValidData.php';
          ?>
        </div>
      </div>
      <div class="clr"></div>
      <footer>
        <div class="theFooter">
          <ul>
            <li class="epa">
              <a href="https://www.epa.gov/recycle" target="_blank">Environmental Protection Agency</a>
            </li>
            <li class="landfill">
              <a href="http://www.westlakelandfill.com" target="_blank">West Lake Landfill</a>
            </li>
            <li class="wiki">
              <a href="https://en.wikipedia.org/wiki/Recycling" target="_blank">Wikipedia</a>
            </li>			
          </ul>
        </div>
      </footer>
    </div>
	</body>
</html>