<?php
// code for wrong input
if(isset($_GET['error'])){
  echo $_GET['error']; 
}
?>
<!-- form  -->
<form action="login.php">
    Welcome, Your id is <b>Ayush</b> and password is <b>12345</b><br><br> 
    <label for="">UserName:</label>
    <input type="text" name="user">
    <br><br>
    <label for="">Password:</label>
    <input type="password" name="pswd">
    <br><br>
    <input type="Submit" value="submit">
</form>
