function formValidation()
{
    var firstname = document.registration.fname;
    var emailid = document.registration.email;
    var mobile = document.registration.mobiles;
    
    if(name_validation(firstname))
    {
        if(email_validation(emailid))
        {
            if(mobile_validation(mobile))
            {
                
            }
        }
    }
    return false;
}

function name_validation(firstname){
    var result = /^[a-zA-Z ]+$/;
    if(firstname.value.match(result)){
        return true;
    }
    else{
        alert("Please enter correct name");
        firstname.focus();
        return false;
    }
}
function email_validation(emailid){
    var result = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(emailid.value.match(result)){
        return true;
    }
    else{
        alert("Please enter correct email id");
        emailid.focus();
        return false;
    }
}
function mobile_validation(mobile){
    var result = /^[0-9]+$/;
    if(mobile.value.match(result))
       {
        return true;
    }
    else{
        alert("Please enter correct mobile number");
        mobile.focus();
        return false;
    }
}