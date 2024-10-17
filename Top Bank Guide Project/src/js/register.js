function password(){
	if(document.getElementById("password").value != document.getElementById("repassword").value){
		alert("Password Mismatch");
		return false;
	}
	else{
		alert("Success!");
		return true;
	}
}    