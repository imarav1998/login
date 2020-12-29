// script for login page
var user = document.forms['form']['email'];
var pass = document.forms['form']['password'];
valid=()=>{
    if( user.value == "" || pass.value == "" ){
        alert("Please enter 'username' and 'password'");
        return false;
    }
}
