function checkUsername(){
	var usrMsg = document.getElementById("usrMsg");
	var nameEle = document.getElementById("username");
	
	if (nameEle){
		var nameValue = nameEle.value;
		if (nameValue.length == 0)
		{
			nameEle.style.border = "2px solid #ff2100";
			usrMsg.innerHTML = "*Required field";
			return 0;
		}
		else if (nameValue.length < 6 || nameValue.length > 10)
		{
			nameEle.style.border = "2px solid #ff2100";
			usrMsg.innerHTML = "Username must be between 6 and 10 characters.";
			return 0;
		}
		else
		{
			nameEle.style.border = "2px solid #54F8FF";
			usrMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}

function checkPassword(){
	var pswMsg = document.getElementById("pswMsg");
	var passEle = document.getElementById("password");
	
	if (passEle){
		var passValue = passEle.value;
		if (passValue.length == 0)
		{
			passEle.style.border = "2px solid #ff2100";
			pswMsg.innerHTML = "*Required field";
			return 0;
		}
		else if (passValue.length < 8 || passValue.length > 50)
		{
			passEle.style.border = "2px solid #ff2100";
			pswMsg.innerHTML = "*Username must be between 8 and 50 characters.";
			return 0;
		}
		else
		{
			var index = passValue.search(
				/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/
			);
			if (index > -1){
				passEle.style.border = "2px solid #54F8FF";
				pswMsg.innerHTML = "";
				return 1;
			}
			else{
				passEle.style.border = "2px solid #ff2100";
				pswMsg.innerHTML = "*Must contain an upper, lower, digit, and a special character.";
				return 0;
			}
		}
	}
	return 0;
}

function checkRepeatPassword()
{
	var password = document.getElementById("password");
	var repeatPassword = document.getElementById("repeatPassword");
	var rMsg = document.getElementById("rePswMsg");
	
	if (repeatPassword){
		if (password.value != repeatPassword.value){
			repeatPassword.style.border = "2px solid #ff2100";
			rMsg.innerHTML = "*Password not matched.";
			return 0;
		}
		else if (repeatPassword.value.length < 8 || repeatPassword.value.length > 50){
			repeatPassword.style.border = "2px solid #ff2100";
			rMsg.innerHTML = "*Length must be between 8 and 50 characters long.";
			return 0;
		}
		else {
			var index = repeatPassword.value.search(
				/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/
			);
			if ( index > -1){
				repeatPassword.style.border = "2px solid #54F8FF";
				rMsg.innerHTML = "";
				return 1;
			}
			else {
				repeatPassword.style.border = "2px solid #ff2100";
				rMsg.innerHTML = "*Must contain an upper, lower, digit, and a special character.";
				return 0;
			}
		}
	}
	return 0;
}

function checkFirstName(){
	var name = document.getElementById("firstName");
	var fnMsg = document.getElementById("fnMsg");
	
	if (name){
		var nameValue = name.value;
		if (nameValue.length > 50){
			name.style.border = "2px solid #ff2100";
			fnMsg.innerHTML = "*Max length 50 characters."
			return 0;
		}
		else if (nameValue.length == 0){
			name.style.border = "2px solid #ff2100";
			fnMsg.innerHTML = "*Required field."
			return 0;
		}
		else{
			name.style.border = "2px solid #54F8FF";
			fnMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}

function checkLastName(){
	var name = document.getElementById("lastName");
	var lnMsg = document.getElementById("lnMsg");

	if (name){
		var nameValue = name.value;
		if (nameValue.length > 50){
			name.style.border = "2px solid #ff2100";
			lnMsg.innerHTML = "*Max length 50 characters."
			return 0;
		}
		else if (nameValue.length == 0){
			name.style.border = "2px solid #ff2100";
			lnMsg.innerHTML = "*Required field."
			return 0;
		}
		else{
			name.style.border = "2px solid #54F8FF";
			lnMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}

function checkAddress1(){
	var address = document.getElementById("address1");
	var adMsg = document.getElementById("ad1Msg");
	
	if (address){
		var adValue = address.value;
		if (adValue.length == 0)
		{
			address.style.border = "2px solid #ff2100";
			adMsg.innerHTML = "*Required Field";
			return 0;
		}
		else if (adValue.length > 100)
		{
			address.style.border = "2px solid #ff2100";
			adMsg.innerHTML = "*Max length 100 characters";
			return 0;
		}
		else
		{
			address.style.border = "2px solid #54F8FF";
			adMsg.innerHTML = "";
			return 1;
		}
	}	
	return 0;
}

function checkAddress2(){
	var address = document.getElementById("address2");
	var adMsg = document.getElementById("ad2Msg");
	
	if (address){
		var adValue = address.value;
		if (adValue.length > 100)
		{
			address.style.border = "2px solid #ff2100";
			adMsg.innerHTML = "*Max length 100 characters";
			return 0;
		}
		else
		{
			address.style.border = "2px solid #54F8FF";
			adMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}


function checkCity(){
	var city = document.getElementById("city");
	var cityMsg = document.getElementById("citMsg");
	
	if (city){
		var cityValue = city.value;
		if (cityValue.length == 0){
			city.style.border = "2px solid #ff2100";
			cityMsg.innerHTML = "*Required field";
			return 0;
		}
		else if (cityValue.length > 50)
		{
			city.style.border = "2px solid #ff2100";
			cityMsg.innerHTML = "*Max length 50 character.";
			return 0;
		}
		else {
			city.style.border = "2px solid #54F8FF";
			cityMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}

function checkState(){
	var state = document.getElementById("state");
	var sMsg = document.getElementById("stateMsg");
	
	if(state){
		var sValue = state.value;
		if (sValue == ""){
			state.style.border = "2px solid #ff2100";
			sMsg.innerHTML = "Please select an option.";
			return 0;
		}
		else{
			state.style.border = "2px solid #54F8FF";
			sMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}

function zipFormat(){
	var zipCode = document.getElementById("zipCode");
	var zipValue = zipCode.value.toString();
	var len = zipValue.length;
	var first, second;
	var index = zipValue.search(/^\d{6}/);
	if ( index > -1 ){
		first = zipValue.slice(0,5);
		second = zipValue.slice(5,len);		
		zipValue = first + "-" + second;
	}
	document.getElementById("zipCode").value = zipValue;
}

function checkZip(){
	var zipCode = document.getElementById("zipCode");
	var zipMsg = document.getElementById("zipMsg");
	var index; 
	if (zipCode){
		var zipValue = zipCode.value;
		index = zipValue.search(/\d{5}/);
		if (zipValue.length == 0)
		{
			zipCode.style.border = "2px solid #ff2100";
			zipMsg.innerHTML = "*Required Field."
			return 0;
		}
		else if (index == -1)
		{
			zipCode.style.border = "2px solid #ff2100";
			zipMsg.innerHTML = "*Zip Code must be 5 to 10 digits long.";
			return 0;
		}
		else{
			zipCode.style.border = "2px solid #54F8FF";
			zipMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}

function phoneFormat(){
	var phoneNumber = document.getElementById("phoneNumber");
	var phoneValue = phoneNumber.value.toString();
	var len = phoneValue.length;
	var first, second;
	var index = phoneValue.search(/^\d{4}/);
	if ( index > -1 ){
		first = phoneValue.slice(0,3);
		second = phoneValue.slice(3,len);		
		phoneValue = first + "-" + second;
	}
	index2 = phoneValue.search(/^\d{3}-\d{4}/);
	if ( index2 > -1 ){
		len = phoneValue.length;		
		first = phoneValue.slice(0,7);
		second = phoneValue.slice(7,len);		
		phoneValue = first + "-" + second;
	}
	document.getElementById("phoneNumber").value = phoneValue;

}

function checkPhone(){
	var phoneNumber = document.getElementById("phoneNumber");
	var phoneMsg = document.getElementById("phoneMsg");
	var index; 
	if (phoneNumber){
		var phoneValue = phoneNumber.value;
		index = phoneValue.search(/^\d{3}-\d{3}-\d{4}$/);
		if (phoneValue.length == 0)
		{
			phoneNumber.style.border = "2px solid #ff2100";
			phoneMsg.innerHTML = "*Required Field."
			return 0;
		}
		else if (index == -1)
		{
			phoneNumber.style.border = "2px solid #ff2100";
			phoneMsg.innerHTML = "*Phone number must be 10 digits long.";
			return 0;
		}
		else{
			phoneNumber.style.border = "2px solid #54F8FF";
			phoneMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}

function checkEmail(){
	var email = document.getElementById("emailBox");
	var emailMsg = document.getElementById("emailMsg");
	var index;
	if (email){
		var emailValue = email.value;
		index = emailValue.search(/^\w+@\w+\.\w+$/);
		if (emailValue.length == 0){
			email.style.border = "2px solid #ff2100";
			emailMsg.innerHTML = "*Required Field."
			return 0;
		}
		else if (index == -1){
			email.style.border = "2px solid #ff2100";
			emailMsg.innerHTML = "*Email must follow the format 'x@x.x'";
			return 0;
		}
		else{
			email.style.border = "2px solid #54F8FF";
			emailMsg.innerHTML = "";
			return 1;
		}
	}
	return 0;
}

function checkBday(){
	var date = document.getElementById("birthDate");
	var dateMsg = document.getElementById("birthMsg");
	if (date){
		var dateValue = date.value;
		if (dateValue == ""){
			date.style.border = "2px solid #ff2100";
			dateMsg.innerHTML = "*Required Field.";
			return 0;
		}
		else{
			date.style.border = "2px solid #54F8FF";
			dateMsg.innerHTML = "";
			return 1;	
		}
	}
	return 0;
}

function checkForm(){
	var maleRadio = document.getElementById("genderMale").checked;
	var femaleRadio = document.getElementById("genderFemale").checked;
	var otherRadio = document.getElementById("genderOther").checked;
	var marriedRadio = document.getElementById("married").checked;
	var singleRadio = document.getElementById("single").checked;
	var error = 0;
	if (checkUsername() == 0){
		error++;
	}
	if (checkPassword() == 0){
		error++;
	}
	if (checkRepeatPassword() == 0){
		error++;
	}
	if (checkFirstName() == 0){
		error++;
	}
	if (checkLastName() == 0){
		error++;
	}
	if (checkAddress1() == 0){
		error++;
	}
	if (checkAddress2() == 0){
		error++;
	}
	if (checkCity() == 0){
		error++;
	}
	if (checkState() == 0){
		error++;
	}
	if (checkZip() == 0){
		error++;
	}
	if (checkPhone() == 0){
		error++;
	}
	if (checkEmail() == 0){
		error++;
	}
	if (checkBday() == 0){
		error++;
	}
	if (maleRadio == false && femaleRadio == false && otherRadio == false){
		document.getElementById("genderBox").style.width= "50%";
		document.getElementById("genderBox").style.border = "2px solid #ff2100";
		document.getElementById("genderMsg").innerHTML = "*Required field.";
		error++;
	}
	else{
		document.getElementById("genderBox").style.border = "none";
		document.getElementById("genderMsg").innerHTML = "";
	}
	if (marriedRadio == false && singleRadio == false){
		document.getElementById("marryBox").style.width= "50%";
		document.getElementById("marryBox").style.border = "2px solid #ff2100";
		document.getElementById("marryMsg").innerHTML = "*Required field.";
		error++;
	}
	else{
		document.getElementById("marryBox").style.border = "none";
		document.getElementById("marryMsg").innerHTML = ""
	}
	if (error == 0){
		alert("Form submitted.");
		return true;
	}else{
		alert("Form contains " + error + " error(s).");
		return false;
	}
}









