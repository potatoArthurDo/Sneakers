<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up</title>
<link rel="stylesheet" href="style.css">


</head>

<body>
<div id="login_box">
	<div id="login_title">SUNDAY</div>
    <div id="login_form">
    	<form name="form1" id="form1" action="signup_handle.php"  method="post" enctype="multipart/form-data" >
        	<fieldset class="form_group">
            	<legend>Sign up your account</legend>
                <p>Enter your personal details below:</p>
                <div class="input_box">
                    <input type="text" id="fullname" name="fullname" class="input_item" placeholder="Fullname" onkeyup = "CheckName();">
                </div>
                <div id="ErorrFullname"></div>
                
                <div class="input_box">
                    <input type="text" id="address" name="address" class="input_item" placeholder="Address" onkeyup="CheckAddress()">
                </div>
                <div id="ErorrAddress"></div>

                <div class="input_box">
                    <input type="text" id="phone" name="phone" class="input_item" placeholder="Phone" onkeyup="CheckPhone()">
                </div>
                <div id="ErorrPhone"></div>

                <div class="input_box">
                    <input type="date" id="dob" name="dob" class="input_item" placeholder="Date Of Birth" >
                </div>
                
                <p>Gender:</p>
                <div class="check_box">
                	<input type="radio" id="r1" name="rGender" value="0" checked="true">
                    <label for="r1">Female</label>
                    <input type="radio" id="r2" name="rGender" value="1">
                    <label for="r2">Male</label>
                </div>
                <div id="ErorrGender"></div>
                
                <p>Enter your account details below:</p>
                <div class="input_box">
                    <input type="text" id="email" name= "email" class="input_item" placeholder="Email" onkeyup="CheckEmail()">
                </div>
                <div id="ErorrEmail"></div>
                
                <div class="input_box">
                    <input type="password" id="password" name="password" class="input_item" placeholder="Password" onkeyup = "CheckPass()">
                </div>
                <div id="ErorrPass"></div>
                
                <div class="input_box">
                    <input type="password" id="re_password" class="input_item" placeholder="Re-Password" onkeyup="CheckRePass()">
                </div>
                <div id="ErorrRePass"></div>

                <p>Choose your avatar:</p>
                <div class="input_box" >
                    <input type="file" name="image" id="image" placeholder="Choose Avatar" >
                </div>
                
                <p><u>Agree with terms and conditions</u></p>
                <div class="check_box">
                	<input type="checkbox" id="agree" value="1" onclick="CheckBox();">
                    <label for="agree">I agree</label>
                </div>
                <p>Already have an account? <a href="Login.php">Login</a></p>
                <a href="index.php" class="back">Back to Home</a>
                <div class="button_item">
                	<button id="b1" name="b1" type="submit"  disabled >
                    Submit
                    </button>
                    
                </div>
                
            </fieldset>
        </form>
    </div>
</div>
</body>
<script language="javascript" >
    function CheckBox() {
    checkbox = document.getElementById("agree")
    button = document.getElementById("b1")
    if(checkbox.checked &&  CheckName() == true && CheckAddress() == true && CheckEmail()==true && CheckPass() == true
        &&CheckRePass() == true && CheckPhone() == true ) {
        button.removeAttribute("disabled");
    }
    else {
        button.disabled = true;
    }
    }
    function CheckName() {
        if(document.getElementById("fullname").value =="") {
        document.getElementById("ErorrFullname").innerText = "The field is required.";
        document.getElementById("ErorrFullname").style.color = "red";
        return false;
    }
        else {
        document.getElementById("ErorrFullname").innerText = "Confirmed.";
        document.getElementById("ErorrFullname").style.color = "green";
        return true;
    }
}

    function CheckAddress() {
        if(document.getElementById("address").value =="") {
        document.getElementById("ErorrAddress").innerText = "The field is required.";
        document.getElementById("ErorrAddress").style.color = "red";
        return false;
    }
        else {
        document.getElementById("ErorrAddress").innerText = "Confirmed.";
        document.getElementById("ErorrAddress").style.color = "green";
        return true;
    }
    }

    function CheckPhone() {
        re = new RegExp();
        re = /^0(\d{9})$/;
        if(document.getElementById("phone").value =="") {
            document.getElementById("ErorrPhone").innerText = "The field is required.";
            document.getElementById("ErorrPhone").style.color = "red";
            return false;
        }
        
        else if((re.test(document.getElementById("phone").value) == false)){
            document.getElementById("ErorrPhone").innerText = "Phone number should start with number 0 and have a total of 10 charaters";
            document.getElementById("ErorrPhone").style.color = "red"
            return false;
        }
        else {
            document.getElementById("ErorrPhone").innerText = "Confirmed.";
            document.getElementById("ErorrPhone").style.color = "green";
            return true;
    }
    }
    function CheckEmail() {
    re1 = new RegExp();
    re1 =  /^\w+([\.\-]?\w+)*@gmail(\.\w+){1,3}$/;
    if(document.getElementById("email").value =="") {
        document.getElementById("ErorrEmail").innerText = "The field is required.";
        document.getElementById("ErorrEmail").style.color = "red"
        return false;
    }
    
    else if(re1.test(document.getElementById("email").value) == false) {
        document.getElementById("ErorrEmail").innerText = "Email structure should look like this: abc123@gmail.com";
        document.getElementById("ErorrEmail").style.color = "red"
        return false;
    }
    else {
        document.getElementById("ErorrEmail").innerText = "Confirmed.";
        document.getElementById("ErorrEmail").style.color = "green"
        return true;
    }
    }

    function CheckPass() {
    re2 = new RegExp();
    re2 =  /^\w{6}\w*$/;
    if(document.getElementById("password").value =="") {
        document.getElementById("ErorrPass").innerText = "The field is required.";
        document.getElementById("ErorrPass").style.color = "red"
        return false;
    }
    
    else if(re2.test(document.getElementById("password").value) == false) {
        document.getElementById("ErorrPass").innerText = "Please enter at least six characters.";
        document.getElementById("ErorrPass").style.color = "red"
        return false;
    }
    else {
        document.getElementById("ErorrPass").innerText = "Confirmed.";
        document.getElementById("ErorrPass").style.color = "green"
        return true;
    }
    }

    function CheckRePass() {
        if(document.getElementById("re_password").value == document.getElementById("password").value) {
            document.getElementById("ErorrRePass").innerText = "Confirmed.";
            document.getElementById("ErorrRePass").style.color = "green"
            return true;
        }
        else {
            document.getElementById("ErorrRePass").innerText = "Incorrect.";
            document.getElementById("ErorrRePass").style.color = "red"
            return false;
        }
    }
</script>
</html>
