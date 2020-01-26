<!DOCTYPE<html>
<html>
<head>
<title>
Login Page
</title>
<style type ="text/css">
#Border
{
background-color:#ffac3d;
color:000000;
text-align:left;
padding:80px;
border:10px;
margin-left:150px;
margin-right:150px;
margin-top:100px;
border-style:double;
border-color:red;
}
body{
background:url('11.jpg')no-repeat;
background-size:cover;
}
</style>
<head>
<body bgcolor = "000000">
<a href="dane.html"><h5 style = "color:ffffff;">BACK TO HOME</h5></a>
<center><h1 style = "font-size:48;font-family:calbiri;color:ffffff;">Login</h1></center>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
	
	$password = stripslashes($_REQUEST['password']);

	//Checking is user existing in the database or not
        $query = "SELECT * FROM `dacademy` WHERE email='$email'
and password='".$password."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: dane.html");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
	}
    }else{
?>
<div class="form" id="Border">
<h3>Please Login</h3>
<b>
<form action="" method="post" name="login">
Email:
 <input type ="text" size = "35" name="email" required/><br><br>
 Password:
 <input type ="text" name = "password" maxlength ="8" size = "8" required/><br><br><br>
 <br></b>
 <center><input type = "submit" value = "Submit"></center>
 <br><br><br>
 <center><a href="register.php"> <input type = "button" value="Sign Up"/></a></center>
 </form>
</div>
<?php } ?>
<br>
<br>


</body>
</html>