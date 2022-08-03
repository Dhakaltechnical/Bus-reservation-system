<html>
<head>
    <title></title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Mulish:wght@300&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    }
    nav{
        background:linear-gradient(to left,#1CB5E0,#000046); 
        width: 100%;
        height: 11vh;
        color:white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-family: 'Ubuntu',sans-serif;
    }  
    nav a{
        color:white;
        margin-left: 20px;
        font-size:20px;

    }
    .logo{
        width: 25%; text-align: center;
    }
    .menu {
        width: 15%; display: flex;
        justify-content: space-around;
        
    }
    .menu a{
        color: black;
        font-weight: bold;
        text-decoration: none;

    }
    .img{
        background:url("../images/bus7.jpg");
        background-position: fixed;
    }
    .label{
        color: white;
        margin-left: 45px;
       height: 11vh;
        font-size: 18px;
        text-transform: capitalize;
        justify-content: center;
    }
    .label p{
        top: 18%;
      position: absolute;  
    }
   

    .form{
        padding: 1px;
        height: 12vh;
       }
       .form-control{
           margin-top: 5px;
           margin-left: 2%;
           display: flex;
       }
  
       .form-control input{
           width: 20%;
           border-radius: 5px;
           font-family:'Mulish', sans-serif; 
          font-size: 14px;
           padding: 8px;
           margin-left: 25px;
       
       }
       .form-control select{
        width: 20%;
        border: 2px solid #f0f0f0;
        border-radius: 5px;
        display: block;
        font-family:'Mulish', sans-serif; 
       font-size: 14px;
        padding: 8px; 
      }

    
       .form .btn{
           
           background: #000046;
           border-radius: 6px;
           padding: 11px;
           border: none;
           outline: none;
           color: #fff;
           font-family:'Montserrat', sans-serif; 
           font-size: 16px;
           font-weight: bold;
           cursor: pointer;
           text-transform: uppercase;
           transition: all 1s ease;
           margin-left: 25px;
           
       }
       .form .btn:hover{
           background :#1CB5E0;
       }
       .winner{
           width: 95%;
           height: 100vh;
           margin-left:3%;            
           
       }
      
    .table{
        
        width: 100%;
        
        margin-top:5px; 
        border-collapse: collapse;
        
    }
  
    .table thead tr th{
        font-family:'Mulish', sans-serif; 
    font-size: 16px;
    text-align: justify;
    font-weight: bold;
    letter-spacing: 0.35px;
    color:black;
    opacity: 1;
    padding:12px;
    border: 1px solid;
    border-top: none;
    border-left: none;
    border-right: none;
    

    }


.table tbody tr td{
    height: 12vh;
    font-family: Arial, Helvetica, sans-serif;
    background-color:white;
    font-size: 18px;
    text-align: justify;
    letter-spacing: 0.35px;
    color:black;
    padding:12px;
    border: 1px solid;
    border-top: none;
    border-left: none;
    border-right: none;
    }

    table tbody tr td .btn{
        width:130px;
        text-decoration: none;
        font-family:none;
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




    .table tbody tr td p{
    font-size: 15px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: normal;
  
    }
    </style>
    </head>
    </html>