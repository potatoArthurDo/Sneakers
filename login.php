<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="login_box">
	<div id="login_title">SUNDAY</div>
    <div id="login_form">
    	<form action="login_handle.php" id="form1" name="form1" onkeyup="CheckBox();">
        	<fieldset class="form_group">
            	<legend>Sign into your account</legend>
                <p>Please enter your name and password to log in.</p>
                <div class="input_box">
                    <input type="text" id="email" name="email" class="input_item" placeholder="Email" onkeyup="CheckEmail(); ">
                </div>
                <div id="ErorrEmail"></div>
                <div class="input_box">
                    <input type="password" id="password" name="password" class="input_item" placeholder="Password" onkeyup="CheckPass(); ">
                </div>
                <div id="loiPass"></div>
                <div class="button_item">
                	<button id="b1" name="b1" type="submit"  disabled  >
                    Login
                    </button>
                </div>
                <p>Don't have an account yet? <a href="Signup.php">Create an account</a></p>
                <a href="index.html" class="back">Back to Home</a>
            </fieldset>
        </form>
    </div>
</div>
</body>
<script>
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
    re2 = /^\w{6}\w*$/;
    if(document.getElementById("password").value =="") {
        document.getElementById("loiPass").innerText = "The field is required.";
        document.getElementById("loiPass").style.color = "red"
        return false;
    }
    
    else if(re2.test(document.getElementById("password").value) == false) {
        document.getElementById("loiPass").innerText = "Please enter at least six characters.";
        document.getElementById("loiPass").style.color = "red"
        return false;
    }
    else {
        document.getElementById("loiPass").innerText = "Confirmed.";
        document.getElementById("loiPass").style.color = "green"
        return true;
    }
}

function CheckBox() {
    const button = document.getElementById("b1")
    if(CheckEmail() == true && CheckPass() == true) {
        button.removeAttribute("disabled");
    }
    else {
        button.disabled = true;
    }

}



</script>
</html>
