function CheckUser() {
    re1 = new RegExp();
    re1 = /^\w{2}\w*$/;
    if(document.getElementById("user").value =="") {
        document.getElementById("loiUser").innerText = "The field is required.";
        document.getElementById("loiUser").style.color = "red"
        return false;
    }
    
    else if(re1.test(document.getElementById("user").value) == false) {
        document.getElementById("loiUser").innerText = "Please enter at least two characters.";
        document.getElementById("loiUser").style.color = "red"
        return false;
    }
    else {
        document.getElementById("loiUser").innerText = "Confirmed.";
        document.getElementById("loiUser").style.color = "green"
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
    if(CheckUser() == true && CheckPass() == true) {
        button.removeAttribute("disabled");
    }
    else {
        button.disabled = true;
    }

}


