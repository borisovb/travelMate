function validate(){
	var checkName = document.forms["Form"]["Name"].value;
	if(checkName==""){
		alert("Name must be filled out!");
		return false;
	}

 var checkEmail = document.forms["Form"]["Email"].value;
    var atCheck = checkEmail.indexOf("@");
    var dotCheck = checkEmail.lastIndexOf(".");
    if (atCheck<1 || dotCheck<atCheck+2 || dotCheck+2>=checkEmail.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
 