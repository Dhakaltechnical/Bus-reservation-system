const form =document.getElementById('form');
const  email=document.getElementById('email');
const password =document.getElementById('password');

//add event
form.addEventListener('submit',(event)=>{
    event.preventDefault(); 
    validate();
})

const sendData = (sRate,count) => {
    if (sRate === count){
        alert('Registration successfull');
    }
}


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
const emailVal =email.value.trim();
const passwordVal =password.value.trim();

//validate email
if(emailVal === ''){
    setErrorMessage(email,'email cannot be blank');
} else if(!isEmail(emailVal)){
    setErrorMessage(email,'Not a valid email');  
} else{
    setSuccessMessage(email);
}

//validate password
if(passwordVal === ''){
    setErrorMessage(password,'password cannot be blank');
} else if(passwordVal.length <= 5){
    setErrorMessage(password,'Minimum 6 character');  
} else{
    setSuccessMessage(password);
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