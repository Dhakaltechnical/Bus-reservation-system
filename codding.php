<?php
session_start();
include ('./db/db.php');




if(isset($_POST['search_btn'])) {
    

     $_SESSION['success']="Add bus added";
     header('location:search/search2.php');

    }
    
?>
