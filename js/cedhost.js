var name,email,mob,pass,rpass,sq,sa;

function validateForm(){
    var regexname = /^([a-zA-Z]+\s?)*$/;
    var regexmob = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
    var regexemail =  /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    var regexpass =/^(?=.*\d)(?=.*[-+_!@#$%^&*., ?])(?=.*[a-z])(?=.*[A-Z]).{8,16}$/;
    var name,email,mob,pass,rpass;

    name=document.getElementById('NAME').value.trim();
    email=document.getElementById('EMAIL').value.trim();
    mob=document.getElementById('MOB').value.trim();
    pass=document.getElementById('PASS').value.trim();
    rpass=document.getElementById('RPASS').value.trim();
    sq=document.getElementById('SQ').value.trim();
    sa=document.getElementById("SA").value.trim();
    
   if(name==""){
      alert("please fill name field");
      document.getElementById('NAME').focus();
      return false;
   }

   if(email==""){
      alert("please fill email field");
      document.getElementById('EMAIL').focus();
      return false;
   }

   if(mob==""){
      alert("please fill mobile field");
      document.getElementById('MOB').focus();
      return false;
   }

   if(sq=="opt"){
      alert("please Select Question");
      document.getElementById('SQ').focus();
      return false;
    }
    if(sa==""){
      alert("please answer");
      document.getElementById('SA').focus();
      return false;
   }

   if(pass==""){
      alert("please fill password field");
      document.getElementById('PASS').focus();
      return false;
   }

   if(rpass==""){
      alert("please fill Repassword field");
      document.getElementById('RPASS').focus();
      return false;
   }


    
    if(name.match(regexname)){
    }
    else{
    	alert("Invalid name");
    	document.getElementById('NAME').focus();
    	return false;
    }

    if(email.match(regexemail)){
    }
    else{
      alert("Invalid email");
      document.getElementById('EMAIL').focus();
    	return false;
    }

    if(mob.length<10){
      alert("Invalid mobile no.: please enter 10 digit");
      document.getElementById('MOB').focus();
      return false;
    }

    if(mob.length>11){
      alert("mobile number should be less than or equal to 11 including 0");
      document.getElementById('MOB').focus();
      return false;
    }



    if(mob.charAt(0)=="0" && mob.charAt(1)=="0"){
       alert("Invalid");
       document.getElementById('MOB').focus();
       return false;	
    }

    if(mob.match(regexmob)){

    }
    else{
       alert("Invalid mobile no.");
       document.getElementById('MOB').focus();
       return false;	
    }
   

   if(pass==rpass){ 
   }
   else{
      alert("password not match");
      document.getElementById('PASS').focus();
      return false;
   }

   if(rpass.length>=8 && rpass.length<=16){
  }
  else{
     alert("password must be between 8 to 16 character");
     document.getElementById('PASS').focus();
     return false;
  }

    if(pass.match(regexpass)){
    }
    else{
       alert("password must contain uppercase,lowercase,special and numberic character");
       document.getElementById('PASS').focus();
       return false;	
    }
}

$(document).ready(function(){
   $("#SA").hide();
   $("#Sa").hide();

   $('#SQ').on("change",function(){
      $("#SA").show();
      $("#Sa").show();
   });

});