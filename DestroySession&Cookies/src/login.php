<?php
session_start();
error_reporting(0);
if(isset($_GET)){
    //matching the values
    if($_GET['user']=="Ayush" && $_GET['pswd']=="12345"){
      echo "<h1> Welcome , Login Successfully<h1>";
      // adding the data in session
      $_SESSION['user']=$_GET['user'];
      $_SESSION['pswd']=$_GET['pswd'];
      // adding the data in cookie
      setcookie("user","Aysuh");
      setcookie("pswd","12345");
      echo "<a href='logout.php'>LogOut</a>";
    }else{
        header('location:index.php?error=Please Fill Correct  Value');
    }
}
?>