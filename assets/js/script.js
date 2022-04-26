function message(t,v){
if(t.value.length>=3){
alert('Welcome ' + t.value+" "+ v.value); 
}
else {
alert('Please write your name correctly');
t.focus();
}
}

function message1 (t){
    if (t.value.length==0)
    {alert('please write your Email');
t.focus();} 
   else if(t.value.indexOf("@") == -1) 
   {alert ('Invalid Email');
t.focus();}
    else if (t.value.indexOf(".") == -1) 
    {alert ('Invalid Email');
t.focus();}
}

function message2 (t){
    if(isNaN(t.value)){
        alert('Invalid Phone Number');
    }
    else if(t.value.length<8){
        alert('8 numbers are required');
    }
}

function Submit(){
   
        alert('Your Pet Stay is Successfully Booked!!! :) ');
}



//login
function login(){
    document.getElementById("login").addEventListener("submit",function(e) {
        var erreur;
        var inputs = document.getElementsByTagName("input");
        for (var i =0 ; i<inputs.length; i++){
            if (!inputs[i].value){
                erreur= "Please fill all the fields" ;
            }
        }
    
        if (erreur) {
            e.preventDefault();
            document.getElementById("erreur").innerHTML = erreur;
            return false;
        } else{
            alert('Envoyé !');
        }
    });
}


//create account
function createAccount(){
    document.getElementById("createAccount").addEventListener("submit",function(e) {
        var erreur;
        var inputs = document.getElementsByTagName("input");
        for (var i =0 ; i<inputs.length; i++){
            if (!inputs[i].value){
                erreur= "Please fill all the fields" ;
            }
        }
    
        if (erreur) {
            e.preventDefault();
            document.getElementById("erreur").innerHTML = erreur;
            return false;
        } else{
            alert('Envoyé !');
        }
    });
    
}