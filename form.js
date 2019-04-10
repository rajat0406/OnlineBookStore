 function num()
{ 	var haveErr = '';
    var inputName = document.getElementById("name").value;
    var validName = /^[A-Za-z\s]+$/;
   if(validName.test(inputName)==false){
   		haveErr = 'Y';
	    alert("please enter valid name ");
	}
	var inputtxt=document.getElementById("mobile").value;
	var phoneno = /^\d{10}$/;
    /*var phoneno = /(0/91)?[7-9][0-9]{9}/;*/
	if(phoneno.test(inputtxt)==false){
		haveErr = 'Y';
        alert("please enter valid number");
	}
    //pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
	var password = document.getElementById("pass1").value;
    var confirmPassword = document.getElementById("pass2").value;
    if(password != confirmPassword) {
    	haveErr = 'Y';
        alert("Passwords do not match.");       
    }
    if (haveErr == 'Y') {
    	document.getElementById("myForm").action = "http://localhost/SignUp/SignUp.html";
    }
    else{
         alert("Successfully submit");
         document.getElementById("myForm").action = "http://localhost/SignUp/connect.php";
    }   
}
function cancelFunction(){
	var removeName = document.getElementById("name").value=" ";
	var removeMail = document.getElementById("mail").value=" ";
	var removeNumber = document.getElementById("mobile").value=" ";
	var removePassword = document.getElementById("pass1").value="";
	var removeConfirmPassword = document.getElementById("pass2").value="";
}