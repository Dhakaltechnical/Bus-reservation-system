<html>
<head>
    <title></title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@300&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    height: 100vh;
    width: 100%;
    background-image:linear-gradient(to left,rgba(11, 7, 71, 0.6),rgba(12, 153, 235, 0.6)),url('../images/back.jpg');
    background-size:cover;
    background-repeat: no-repeat;
    font-family: 'Mulish', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    width: 100vw;
}
.container{
    background-color: #fff;
    border-radius: 10px;
    box-shadow:0 2.8px 2,2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0,0,0.48),0 12.5px ;
    overflow: hidden;
    width:calc(100vw - 65vw);
    max-width:100% ;
}
.header{
    background: linear-gradient(to left,#1CB5E0,#000046);
    padding: 30px 0;
}
.header h2{
color: #fff;
font-family: 'Montserrat', sans-serif;
font-size: 24px;
text-transform: uppercase;
text-align: center;
}
.form{
    padding: 10px; 
}
.form-control{
    margin-bottom: 30px;
    position:relative;
}
.form-control label{
    display: inline-block;
    margin-bottom: 5px;
}
.form-control input{
    width: 100%;
    border: 2px solid #f0f0f0;
    border-radius: 5px;
    display: block;
    font-family:'Mulish', sans-serif; 
   font-size: 14px;
    padding: 5px;

}
.form-control input:focus{
    outline:0;
    border-color: #777;
}
.form-control.success input{
    border-color: #2ecc71;
}
.form-control.error input{
    border-color: #e74c3c;
}
.form-control i{
    position: absolute;
    right: 12px;
    top: 32px;
    visibility: hidden;
}

.form-control.success i.fa-check-circle{
    color:#2ecc71 ;
    visibility: visible;
}
.form-control.error i.fa-exclamation-circle{
    color: #e74c3c;
    visibility: visible;
}
.form-control small{
    color: #e74c3c;
    position: absolute;
    left: 0;
    visibility: hidden;
}
.form-control.error small{
    visibility: visible;
}
.form .btn{
    background: linear-gradient(to left,#1CB5E0,#000046);
    border-radius: 6px;
    border: none;
    outline: none;
    color: #fff;
    display: block;
    font-family:'Montserrat', sans-serif; ;
    font-size: 16px;
    padding: 15px 0;
    margin-top: 20px;
    width: 100%;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 1s ease;
}
.form .btn:hover{
    background: linear-gradient(to right,#1CB5E0,#000046);
}


.errmsg{
    background:#F2DEDE;
    color:#A94442;
    padding:10px;
    width:95%;
    border-radius:5px;
    margin:20px auto;
}
</style>
</head>
</html>