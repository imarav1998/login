var name1 = document.forms['form']['name'];
var lastName = document.forms['form']['last-name'];
var gender = document.getElementsByName('gender[]');
var age = document.forms['form']['age'];
var email = document.forms['form']['email'];
var pass = document.forms['form']['password'];
var pass1 = document.forms['form']['confirm-password'];
function filter(){
    return ((event.charCode > 64 &&  even.charCode < 91) || (event.charCode > 96 && event.charCode < 123));
}
function validate(){
    for(var i =0 ;i<3;i++){
        if  (gender[i].checked) {
            var gender1 = true;
            break;
        }
        else{
            var gender1 = false;
        }
    }
    if(gender1 != false && name1.value != "" && lastName.value != "" && age.value !="" && email.value !="" &&  pass.value != "" && pass1.value !=""){
        if(pass.value == pass1.value){
            return true;
        }
        else{
            alert('passwords do not match');
            return false;
        }   
    }   
    else{
        alert("please fill all fields");
        return false;
    }
}


