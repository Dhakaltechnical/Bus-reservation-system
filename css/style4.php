@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@300&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.form{
 padding: 0px;
}
.form-control{
    margin-top: 50px;
    margin-left: 12%;
}
.form-control input{
    border-radius: 5px;
    font-family:'Mulish', sans-serif; 
   font-size: 14px;
    padding: 5px;
    margin-left: 25px;

}
.form .btn{
    
    background: linear-gradient(to left,#1CB5E0,#000046);
    border-radius: 6px;
    border: none;
    outline: none;
    color: #fff;
    font-family:'Montserrat', sans-serif; ;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    text-transform: uppercase;
    transition: all 1s ease;
    margin-left: 25px;
    
}
.name{
    font-size: 12px;
    margin-left: 220px;
}
.table-container
{
  padding: 10px;
 
}


.table{
    width: 80%;
    margin-left: 10%;
    border-collapse: collapse;
}
.table thead{
    background:linear-gradient(to right,#000046,#1CB5E0,#000046);
}
.table thead tr th{
font-size: 18px;
font-weight: medium;
letter-spacing: 0.35px;
color: #fff;
opacity: 1;
padding:12px;
vertical-align: top;
border: 2px solid black;
}
.table tbody tr td{
    font-size:18px;
    letter-spacing: 0.35px;
    font-weight: normal;
    color: black;
    background-color: white;
    padding: 8px;
    border: 2px solid black;
}
.table tbody tr td .btn{
    width:130px;
    text-decoration: none;
    line-height: 35px;
    display: inline-block;
    background:linear-gradient(to left,#1CB5E0,#000046);
    font-weight:medium;
    color: #fff;
    text-align: center;
    user-select: none;
    font-size: 20px;
    opacity: 1;
    cursor: pointer;
    border: 2px solid;
    border-radius: 7px;

}
.table tbody tr td .btn:hover{
    background:linear-gradient(to right,#1CB5E0,#000046);
}