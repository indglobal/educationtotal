function uservalidate(){

	var email = $('#user_signin #uemail').val();
	var paswrd = $('#user_signin #upassword').val();

	if(email == ""){
       $('#user_signin #uemail').css("border-color","red");
       $('#user_signin #uemail').focus();
       return false;
	}

	if(paswrd == ""){
       $('#user_signin #upassword').css("border-color","red");
       $('#user_signin #upassword').focus();
       return false;
	}	

	 
}

function signUpvalidate(){
	var fname = $('#user_sign_up #Fname').val();
	var lname = $('#user_sign_up #Lname').val();
	var email = $('#user_sign_up #uemail').val();
	var paswrd = $('#user_sign_up #upassword').val();
	var cpaswrd = $('#user_sign_up #Cupassword').val();
    var reg = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	if(fname == ""){
       $('#user_sign_up #Fname').css("border-color","red");
       $('#user_sign_up #Fname').focus();
       return false;
	}

	if(lname == ""){
       $('#user_sign_up #Lname').css("border-color","red");
       $('#user_sign_up #Lname').focus();
       return false;
	}

	if(email == ""){
       $('#user_sign_up #uemail').css("border-color","red");
       $('#user_sign_up #uemail').focus();
       return false;
	}else if(!reg.test(email)){
	   $('#user_sign_up #uemail').css("border-color","red");
	   $('#user_sign_up #uemail').val("");
       $('#user_sign_up #uemail').focus();
       return false;
	}

	if(paswrd == ""){
       $('#user_sign_up #upassword').css("border-color","red");
       $('#user_sign_up #upassword').focus();
       return false;
	}
	if(cpaswrd == "" || cpaswrd != paswrd){
       $('#user_sign_up #Cupassword').css("border-color","red");
       $('#user_sign_up #Cupassword').focus();
       return false;
	}
	 
}


function prosignUpvalidate(){
	var fname = $('#pro_sign_up #Fname').val();
	var lname = $('#pro_sign_up #Lname').val();
	var email = $('#pro_sign_up #uemail').val();
	var paswrd = $('#pro_sign_up #upassword').val();
	var cpaswrd = $('#pro_sign_up #Cupassword').val();
    var reg = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	if(fname == ""){
       $('#pro_sign_up #Fname').css("border-color","red");
       $('#pro_sign_up #Fname').focus();
       return false;
	}

	if(lname == ""){
       $('#pro_sign_up #Lname').css("border-color","red");
       $('#pro_sign_up #Lname').focus();
       return false;
	}

	if(email == ""){
       $('#pro_sign_up #uemail').css("border-color","red");
       $('#pro_sign_up #uemail').focus();
       return false;
	}else if(!reg.test(email)){
	   $('#pro_sign_up #uemail').css("border-color","red");
	   $('#pro_sign_up #uemail').val("");
       $('#pro_sign_up #uemail').focus();
       return false;
	}

	if(paswrd == ""){
       $('#pro_sign_up #upassword').css("border-color","red");
       $('#pro_sign_up #upassword').focus();
       return false;
	}
	if(cpaswrd == "" || cpaswrd != paswrd){
       $('#pro_sign_up #Cupassword').css("border-color","red");
       $('#pro_sign_up #Cupassword').focus();
       return false;
	}

	
	

	 
}


$('.form-group input').on('keyup',function(){
	$(this).css('border-color','blue');
});