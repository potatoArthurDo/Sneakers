<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit User</title>
<link rel="stylesheet" href="style.css">


</head>

<body>
<div id="login_box">
	<div id="login_title">SUNDAY</div>
    <div id="login_form">
        <?php
        if(isset($_REQUEST["ID"]) ==false)
            die("<p> Chưa có ID <p>");
        $ID = $_REQUEST["ID"];
        if($ID =="" || is_numeric($ID) == false)
            die("<p> ID không được rỗng và phải là số <p>");
        require_once("tb_user_info.php");
        $row = getUser($ID);
        ?>
    	<form name="form1" id="form1" action="edit_info_handle.php"  >
        	<fieldset class="form_group">
            	<legend>Modify your account</legend>
                <p>Enter your personal details below:</p>
                <div class="input_box">
                    <input type="text" id="fullname" name="fullname" class="input_item" placeholder="Fullname" onkeyup = "CheckName();" value="<?=$row["full_name"]?>">
                </div>
                <div id="ErorrFullname"></div>
                
                <div class="input_box">
                    <input type="text" id="address" name="address" class="input_item" placeholder="Address" onkeyup="CheckAddress()" value="<?=$row["address"]?>">
                </div>
                <div id="ErorrAddress"></div>

                <div class="input_box">
                    <input type="text" id="phone" name="phone" class="input_item" placeholder="Phone" onkeyup="CheckPhone()" value="<?=$row["phone"]?>">
                </div>
                <div id="ErorrPhone"></div>

                <div class="input_box">
                    <input type="date" id="dob" name="dob" class="input_item" placeholder="Date Of Birth" value="<?=$row["dob"]?>" >
                </div>
                
                <p>Gender:</p>
                <div class="check_box">
                	<input type="radio" id="r1" name="rGender" value="0" checked="true" value="<?=$row["gender"]==0?"checked":""?>">
                    <label for="r1">Female</label>
                    <input type="radio" id="r2" name="rGender" value="1" value="<?=$row["gender"]==1?"checked":""?>">
                    <label for="r2">Male</label>
                </div>
                <div id="ErorrGender"></div>
                <div class="input_box">
                    <input type="text" id="email" name= "email" class="input_item" placeholder="Email" onkeyup="CheckEmail()">
                </div>
                <div id="ErorrEmail"></div>
                <div class="check_box">
                	<input type="checkbox" id="agree" value="1" onclick="CheckBox();">
                    <label for="agree">I agree</label>
                </div>
                <p>Choose your avatar:</p>
                <div class="input_box">
                    <input type="file" name="image" id="image" placeholder="Choose Avatar" value="<?=$row["image"]?>" method="post" enctype="multipart/form-data">
                </div>
                <a href="index.html" class="back">Back to Home</a>
                <div class="button_item"  >
                	<button id="b1" type="submit"  disabled >
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
    if( checkbox.checked && CheckName() == true &&  CheckAddress() == true && CheckEmail()==true && CheckPhone() == true ) {
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
</script>
</html>
