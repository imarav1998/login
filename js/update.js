var table1 = document.getElementsByClassName('table1');
var table2 = document.getElementsByClassName('table2');
var flag =0;
update = ()=>{
    if(flag==0){
        table1[0].style.display='none';
        table1[1].style.display='none';
        table1[2].style.display='none';
        table2[0].style.removeProperty('display');
        table2[1].style.removeProperty('display');
        table2[2].style.removeProperty('display');
        table2[3].style.removeProperty('display');
        
        flag++;
    }
    else{
        table1[0].style.removeProperty('display');
        table1[1].style.removeProperty('display');
        table1[2].style.removeProperty('display');
        table2[0].style.display='none';
        table2[1].style.display='none';
        table2[2].style.display='none';
        table2[3].style.display='none';
        flag=0;
    }
}

var fname = document.forms['form2']['fname'];
var lname = document.forms['form2']['lname'];
var gender = document.forms['form2']['gender'];
var age = document.forms['form2']['age'];
var email = document.forms['form2']['email'];

function filter(){
    return ((event.charCode > 64 &&  even.charCode < 91) || (event.charCode > 96 && event.charCode < 123));
}
valid = ()=>{
    if(fname.value != "" && lname.value != "" && age.value !="" && email.value !="" ){
        return true;
    }   
    else{
        alert("please fill all fields");
        return false;
    }
}
delete1 = () =>{
    var table3 = document.getElementsByClassName('table3');
    table3[0].style.removeProperty('display');
    table2[0].style.display='none';
    table2[1].style.display='none';
    table2[2].style.display='none';
    table2[3].style.display='none';
}
update1 =()=>{
    var table3 = document.getElementsByClassName('table3');
    table3[0].style.display='none';
    table1[0].style.removeProperty('display');
    table1[1].style.removeProperty('display');
    table1[2].style.removeProperty('display');
}