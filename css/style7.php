<html>
<head>
    <title></title>

<style>

@import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

* {
  box-sizing: border-box;
}
nav a{
        color:white;
        margin-left: 20px;
        font-size:20px;

    }

body {
  
  display: ;
  flex-direction: column;
  color: grey;
  align-items: center;
  justify-content: center;
  
  font-family: 'Lato', 'sans-serif';
}
table{
    margin-left:0.5%;
}
table tr td {
    padding: 10px;
background-color: grey;
color: black;
font-size: 18px;
border-radius:  3px;
}
table tr .space{
background-color: white;
}


 

.seat {
  background-color:grey;
  height: 12px;
  width: 15px;
  margin: 3px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.seat.selected {
  background-color: green;
}

.seat.occupied {
  background-color: red;
}

.seat:nth-of-type(2) {
  margin-right: 18px;
}

.seat:nth-last-of-type(2) {
  margin-left: 18px;
}

.seat:not(.occupied):hover {
  cursor: pointer;
  transform: scale(1.2);
}

.showcase .seat:not(.occupied):hover {
  cursor: default;
  transform: scale(1);
}

.showcase {
    margin-left:0.5%;
    width:25%;
  background-color: rgba(0, 0, 0, 0.1);
  padding: 5px 10px;
  border-radius: 5px;
  color: black;
  list-style-type: none;
  display: flex;
  
}

.showcase li {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 10px;
}

.showcase li small {
  margin-left: 10px;
}





p.text {
  margin: 5px 0;
  margin-left:0.5%;
}

p.text span {
  color: #6feaf6;
}




</style>      
    </head>         
 </html>