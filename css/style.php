
<html>
<head>
    <title></title>

<style>

/*import google fonts*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}
html{
    scroll-behavior: smooth;
}

.max-width{
    max-width: 1300px;
    padding: 0 80px;
    margin: auto;
   
}
/*navbar styling*/
.navbar{
    position:fixed;
    width: 100%;
    z-index: 999;
    padding: 30px 0;
    font-family: 'Ubuntu',sans-serif;
    transition: all 0.3s ease;
}
.navbar.sticky{
    padding: 15px 0;
     background:linear-gradient(to left,#1CB5E0,#000046);
}
.navbar .max-width{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.navbar .logo a{
color: #fff;
font-size: 35px;
font-weight: 600;
}
.navbar .logo a span{
color:#000046;
transition: all 0.3s ease;
}
.navbar.sticky .logo a span{
    color: #fff;
}
.navbar .menu li{
    list-style: none;
    display: inline-block;
}
.navbar .menu li a{
    display: block;
    color:#fff;
    font-size: 18px;
    font-weight: 500;
    margin-left: 25px;
    transition: color 0.3s ease;
}
.navbar .menu li a:hover{
    color:#1CB5E0;
}
.navbar.sticky .menu li a:hover{
    color: #000046;
}

.navbar ul button{

  background: linear-gradient(to left,#1CB5E0,#000046);
  border-radius: 5px;
  border: none;
  outline: none;
  color: #fff; 
  font-family:'Montserrat', sans-serif; ;
  font-size: 18px;
 padding: 9px 25px;
  margin-left: 30px;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 1s ease;
}
.navbar ul button:hover{
  background:linear-gradient(to right,#1CB5E0,#000046);
}
.navbar ul button a{
  text-decoration: none;
  color: white;
  font-weight: bold;
}

/*menu-btn styling*/
.menu-btn{
    color:#fff;
    font-size: 23px;
    cursor: pointer;
    display: none;
}
.scroll-up-btn{
    position: fixed;
    height: 45px;
    width: 42px;
    background: linear-gradient(to right,#1CB5E0,#000046);
    right: 30px;
    bottom: 10px;
    text-align: center;
    line-height: 45px;
    color: #fff;
    z-index: 9999;
    font-size: 30px;
    border-radius: 6px;
    border-bottom-width: 2px;
    cursor: pointer;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
}
.scroll-up-btn.show{
    bottom: 30px;
    opacity: 1;
    pointer-events: auto;
}
.scroll-up-btn:hover{
    filter: brightness(90%);
}



/* home section styling */
.home{
    display: flex;
    background:rgb(29, 19, 19);
    background-size: cover;
    height: 100vh;
    color: #fff;
    min-height: 500px;
    font-family: 'Ubuntu',sans-serif;
   
}
.home .form{

  margin-top: 7.55%; 
margin-right: 24px;
  width: 120%;
  height: 81vh;
  border-radius: 5px;
         
  }
  .form{
      padding: 40px; 
     background:linear-gradient(to right,#000046,#1CB5E0,#000046);
  }
  .form-control{
      margin-bottom: 45px;
      position:relative;
  }
   .form-control label{
      display: inline-block;
      color: white;
      margin-bottom: 5px;
      font-size: 18px;
      text-transform: capitalize;
  }
  .form-control input{
      width: 100%;
      border: 2px solid #f0f0f0;
      border-radius: 5px;
      display: block;
      font-family:'Mulish', sans-serif; 
     font-size: 18px;
      padding: 4px;
  }
  .form-control select{
    width: 100%;
    border: 2px solid #f0f0f0;
    border-radius: 5px;
    display: block;
    font-family:'Mulish', sans-serif; 
   font-size: 18px;
    padding: 4px;
  
  }
  .form button{
  
      background:linear-gradient(to left,#1CB5E0,#000046);
      border-radius: 5px;
      border: none;
      outline: none;
      color: #fff;
      display: block;
      font-family:'Montserrat', sans-serif; ;
      font-size: 16px;
     padding: 15px 0;
    
      width: 100%;
      font-weight: bold;
      text-transform: uppercase;
      cursor: pointer;
      transition: all 1s ease;
         
  }
  .form button:hover{
     background:  linear-gradient(to right,#1CB5E0,#000046);
  }
  .form button a{
      text-decoration: none;
      color: white;
      font-weight: bold;
  }
  



  #slider{
    overflow: hidden;
    width: 98%;
    margin-top: 8%;
    }
    #slider figure img{
        width: 30%;
        height: 85vh;
    }
    
    #slider figure{
    position: relative;
    width: 1000%;
    margin: 0;
    top: 30px;
    margin-right:35px;
    animation: 20s slider infinite;
    }
    
    #slider figure img{
    width: 10%;
    float: left;
    
    }
    
    @keyframes slider{
      0%{
          left: 0;
      }
      20%{
        left: 0;
    }
    25%{
        left: -100%;
    }
    45%{
        left: -100%;
    }
    50%{
        left: -200%;
    }
    70%{
        left: -200%;
    }
    75%{
        left: -300%;
    }
    95%{
        left: -300%;
    }
    
    }
  
/* all similar content styling code*/

section{
    padding: 100px 0;
}
.about, .contact,footer{
    font-family: 'Poppins',sans-serif;
}
.about .about-content,
.contact .contact-content{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
}
section .title{
    position: relative;
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    margin-bottom: 60px;
    padding-bottom: 20px;
    font-family: 'Ubuntu',sans-serif;
}
section .title::before{
    content: "";
    position: absolute;
    bottom: 0px;
    left:50% ;
    width: 180px;
    height: 3px;
    background: #111;
    transform: translate(-50%);
}
section .title::after{
    position: absolute;
    bottom: -12px;
    font-size: 20px;
    color: lawngreen;
    left:50% ;
   padding: 5px;
    background: #fff;
    transform: translate(-50%);
}
/*about section styling*/




.about .about-content .left{
 width: 45%;
}
.about .about-content .left img{
 height: 400px;
 width: 400px;
 object-fit: cover;
 border-radius: 6px;
}
.about .about-content .right{
    width: 55%;
   }
   .about .about-content .right .text{
       font-size: 25px;
       font-weight: 600;
       margin-bottom: 10px;
   }
  
   .about .about-content .right p{
       text-align: justify;
   }
   



/* contact section styling*/

.contact .contact-content .column{
    width: calc(50% - 30px);
}
.contact .contact-content .text{
font-size: 20px;
font-weight: 600;
margin-bottom: 10px;
}
.contact .contact-content .left p{
text-align: justify;
}
.contact .contact-content .left .icons{
    margin: 10px 0 ;
}
.contact .contact-content .row{
    display: flex;
    height: 65px;
    align-items: center;
}
.contact .contact-content .row .info{
    margin-left: 30px;
}
.contact .contact-content .row i{
    font-size: 25px;
    color: black;
}
.contact .contact-content .info .head{
font-weight: 500;
}
.contact .contact-content .info .sub-title{
    color: #333;
}
.contact .right form .fields{
    display: flex;
}
.contact .right form .field,
.contact .right form .fields .field{
    height: 45px;
    width: 100%;
    margin-bottom: 15px;
}
.contact .right form .textarea{
    height: 80px;
    width: 100%;
}
.contact .right form .name{
    margin-right: 10px;
}
.contact .right form .email{
    margin-left: 10px;  
}
.contact .right form .field input,
.contact .right form .textarea textarea{
    height: 100%;
    width: 100%;
    border: 1px solid lightgrey;
    border-radius: 6px;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-family: 'Poppins', sans-serif;
}
.contact .right form .textarea textarea{
    padding-top: 10px;
    resize: none;
}
.contact .right form .button{
    height: 47px;
    width: 170px;
}
.contact .right form .button button{
    width: 100%;
    height: 100%;
    border: 2px solid;
    background: linear-gradient(to left,#1CB5E0,#000046);
    color: #fff;
    outline: none;
    font-size: 20px;
    font-weight: 500;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3 ease;
}
.contact .right form .button button:hover{
  background: linear-gradient(to right,#1CB5E0,#000046);
    
}

/* footer section styling */
footer{
    background: #111;
    padding: 15px 23px;
    color: #fff;
    text-align: center;
}
footer span a{
    color:#1CB5E0;
    text-decoration: none;
}
footer span a:hover{
    text-decoration: underline;
}

/* responsive media query start*/
@media(max-width: 1300px){
    .home .max-width{
        margin-left: 0px;
    }
}
@media(max-width: 1104px){
    .about .about-content .left img{
        height: 350px;
        width: 350px;
        
       }
    }

@media(max-width: 991px){
 .max-width{
        padding: 0 50px;
    }

@media(max-width: 947px){
   
   
    .menu-btn{
        display:block;
        z-index: 999;
    }
    .menu-btn i.active:before{
        content:"\f00d";
    }
    .navbar .menu{
        position: fixed;
        height: 100vh;
        width: 100%;
        left: -100%;
        top: 0;
        background: #111;
        text-align: center;
        padding-top: 80px;
        transition: all 0.3s ease;
    }
   .navbar .menu.active{
left: 0;
    }
    .navbar .menu li{
        display: block;
    }
    .navbar .menu li a{
        display: inline-block;
        margin: 20px 0;
        font-size: 25px;
    }
}
.home .home-content .text-2{
    font-size: 70px;
   
    }
    .home .home-content .text-3{
        font-size: 35px;
        }
        .home .home-content a{
            font-size: 23px;
            padding: 10px 30px;
        } 
         .max-width{
            max-width: 930px;
          
        }
        .about .about-content .column{
            width: 100%;
        }
        .about .about-content .left{
           display: flex;
           justify-content: center;
           margin: 0 auto 60px;
        }
        .about .about-content .right{
            flex: 100%;

        }
       
        
        .contact .contact-content .column{
            width: 100%;
            margin-bottom: 35px;
        }
        
        @media(max-width: 690px){
            .max-width{
                padding: 0 23px;
            }
            .home .home-content .text-2{
                font-size: 60px;
               
                }
                .home .home-content .text-3{
                    font-size: 32px;
                    }
                    .home .home-content a{
                        font-size: 20px;
                    
                    }
                     
                    
                    
        }
       

        @media (max-width: 500px) {
            .home .home-content .text-2{
                font-size: 50px;
            }
            .home .home-content .text-3{
                font-size: 27px;
            }
            .about .about-content .right .text
           {
                font-size: 19px;
            }
            .contact .right form .fields{
                flex-direction: column;
            }
            .contact .right form .name,
            .contact .right form .email{
                margin: 0;
            }
            .scroll-up-btn{
                right: 15px;
                bottom: 15px;
                height: 38px;
                width: 35px;
                font-size: 23px;
                line-height: 38px;
            }
        }
    }  
</style>      
    </head>         
 </html>