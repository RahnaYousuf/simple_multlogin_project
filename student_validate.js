
function validateForm() {
    var first = document.getElementById('Ftname').value;
    var middle= document.getElementById('Mname').value;
    var last = document.getElementById('Lname').value;
    var cls = document.getElementById('Cls').value;
    var phone= document.getElementById('phone').value;
    var cad= document.getElementById('Current Address').value;
    var em = document.getElementById('email').value;
    var pass = document.getElementById('password').value;
    var cpass = document.getElementById('conpass').value;
    if (first == "") {
            document.getElementById('fname').innerHTML = "** Please fill first name";
            document.myform.Firstname.focus();
            return false;
    }
    else
    {
        document.getElementById('fname').innerHTML ="";
        status=true;
    }
    if (middle == "") {
            document.getElementById('mid').innerHTML = "** Please fill middle name";
            document.myform.Middlename.focus();
            return false;
    }
     else
    {
        document.getElementById('mid').innerHTML ="";
        status=true;
    }
    if (last == "") {
            document.getElementById('lt').innerHTML = "** Please fill last name";
            document.myform.Lastname.focus();
            return false;
    }
     else
    {
        document.getElementById('lt').innerHTML ="";
        status=true;
    }
    if(document.myform.Cls.selectedIndex==""){
    
            document.getElementById('cor').innerHTML = "** Please fill class";
            document.myform.Cls.focus();
            return false;
    }
     else
    {
        document.getElementById('cor').innerHTML ="";
        status=true;
    }
    if (document.myform.gender.value=="") {
        document.getElementById("ge").innerHTML= "** Please fill gender";
        document.myform.gender[1].focus();
        return false;
    } 
     else
    {
        document.getElementById('ge').innerHTML ="";
        status=true;
    }  
    if (phone == "") {
            document.getElementById('ph').innerHTML = "** Please fill phone number";
            document.myform.Phone.focus();
            return false;
    }
     else
    {
        document.getElementById('ph').innerHTML ="";
        status=true;
    }
    if (cad == "") {
            document.getElementById('ca').innerHTML = "** Please fill address";
            document.myform.CurrentAddress.focus();
            return false;
    }
     else
    {
        document.getElementById('ca').innerHTML ="";
        status=true;
    }
    if (em == "") {
            document.getElementById('em').innerHTML = "** Please fill email";
            document.myform.Email.focus();
            return false;
    }
     else
    {
        document.getElementById('em').innerHTML ="";
        status=true;
    }
    if (pass == "") {
            document.getElementById('pa').innerHTML = "** Please fill password";
            document.myform.Password.focus();
            return false;
    }
     else
    {
        document.getElementById('pa').innerHTML ="";
        status=true;
    }
    if (cpass == "") {
            document.getElementById('conf').innerHTML = "** Please fill confirm password";
            document.myform.Retype_password.focus();
            return false;
    }
     else
    {
        document.getElementById('conf').innerHTML ="";
        status=true;
    }
    if(pass != cpass){
        document.getElementById('conf').innerHTML = "** password does not match";
            return false;
    
    }
  
  
  
  
  }
  