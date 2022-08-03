
function validateForm()
const form =document.getElementById('form');
const username =document.getElementById('username');
const phone =document.getElementById('phone');
const  email=document.getElementById('email');
const password =document.getElementById('password');
const cpassword =document.getElementById('cpassword');

//add event
form.addEventListener('submit',(event)=>{
    event.preventDefault(); 
    validate();
})




//for final validation
const SuccessMessage =() =>{
   let formCon = document.getElementsByClassName('form-control');
   var count =formCon.length - 1;
   for(var i =0; i<formCon.length; i++){
       if(formCon[i].className === "form-control success"){
           var sRate = 0 + i;
           console.log(sRate);
          sendData(sRate,count);
       } else {
           return false;
       }
   }
}

//email validate more
const isEmail = (emailVal) =>{
var atSymbol=emailVal.indexOf("@");
if(atSymbol < 1) return false;
var dot= emailVal.lastIndexOf('.');
if(dot <= atSymbol + 3) return false;
if(dot === emailVal.length - 1) return false;
return true;
}
//define the validate function
const validate=()=>{
    const usernameVal =username.value.trim();
const phoneVal =phone.value.trim();
const emailVal =email.value.trim();
const passwordVal =password.value.trim();
const cpasswordVal =cpassword.value.trim();

//validate username
if(usernameVal === ''){
    setErrorMessage(username,'username cannot be blank');
} else if(usernameVal.length <= 2){
    setErrorMessage(username,'username min 3 characters');  
} else{
    setSuccessMessage(username);
}
//validate email
if(emailVal === ''){
    setErrorMessage(email,'email cannot be blank');
} else if(!isEmail(emailVal)){
    setErrorMessage(email,'Not a valid email');  
} else{
    setSuccessMessage(email);
}

//validate phone
if(phoneVal === ''){
    setErrorMessage(phone,'Minimum 10 numbers');
} else if(phoneVal.length != 10){
    setErrorMessage(phone,'Not a valid number');  
} else if((phoneVal.charAt(0)<9)){
    setErrorMessage(phone,'Number shoul start by 9');  
}
else{
    setSuccessMessage(phone);
}
//validate password
if(passwordVal === ''){
    setErrorMessage(password,'password cannot be blank');
} else if(passwordVal.length <= 5){
    setErrorMessage(password,'Minimum 6 character');  
} else{
    setSuccessMessage(password);
}
//validate cpassword
if(cpasswordVal === ''){
    setErrorMessage(cpassword,'confirm password cannot be blank');
} else if(passwordVal != cpasswordVal){
    setErrorMessage(cpassword,'password doesnot match');  
} else{
    setSuccessMessage(cpassword);
}
 SuccessMessage();
}

function setErrorMessage(input,errormessage){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className="form-control error";
    small.innerText=errormessage;
}
function setSuccessMessage(input){
    const formControl = input.parentElement;
    formControl.className="form-control success";
}
