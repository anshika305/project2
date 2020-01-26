<!DOCTYPE html>
<html>
<head>
<title>
Register Yourself Here
</title>
<style type ="text/css">
#Border
{
background-color:#d12c7c;
color:000000;
text-align:left;
padding:50px;
border:10px;
margin-left:150px;
margin-right:150px;
margin-top:80px;
border-style:double;
border-color:red;
}
body{
background:url('12.jpg')no-repeat;
background-size:cover;
}
</style>
</head>
<body bgcolor = "000000">
<a href="dane.html"><h5 style = "color:ffffff;">BACK TO HOME</h5></a>

<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
        // removes backslashes
    $fname = stripslashes($_REQUEST['fname']);
        //escapes special characters in a string
   
    $lname = stripslashes($_REQUEST['lname']);

    $gender = stripslashes($_REQUEST['gender']);

    $age = stripslashes($_REQUEST['age']);
        //escapes special characters in a string
    
    $addr1 = stripslashes($_REQUEST['addr1']);
   
    $addr2 = stripslashes($_REQUEST['addr2']);

    $place = stripslashes($_REQUEST['place']);
        //escapes special characters in a string
 
    $country = stripslashes($_REQUEST['country']);

    $pin = stripslashes($_REQUEST['pin']);

    $phone = stripslashes($_REQUEST['phone']);
        //escapes special characters in a string

    $mobile = stripslashes($_REQUEST['mobile']);
  
    $email = stripslashes($_REQUEST['email']);
 
    $password = stripslashes($_REQUEST['password']);
 
    
        $query = "INSERT into  `dacademy` (fname,lname,gender,age,addr1,addr2,place,country,pin,phone,mobile,email,password)
VALUES ('$fname','$lname','$gender','$age','$addr1','$addr2','$place','$country','$pin','$phone','$mobile','$email','$password')";
        $result = mysqli_query($con,$query);
        if($result){
           header("Location: index.php");
        }
    }else{
?>

<div class="form" id="Border">
<center><h1 style = "font-size:48;font-family:calbiri;color:ffffff;">Register Yourself Here</h1></center>


<form name="registration" action="" method="post">
First name:
 <input type ="text" name="fname" required /><br><br>
Last name:
 <input type ="text" name="lname" required /><br><br>
Gender:
 <input type ="text" name="gender" required /><br><br>
Age :
 <input type ="text" name="age" required /><br><br>
Adresss1:
 <input type = "text" name="addr1" required /><br><br>
Adresss2:
 <input type ="text" name="addr2" required /><br><br>
   
Place:
 <input type ="text" name="place" required /><br><br>
Country:
 <input type ="text" name="country" required /><br><br>
Pin:
 <input type ="text" name = "pin" maxlength ="4" size = "4" required /><br><br>
Phone:
 <input type ="text" name="phone" required /><br><br>
Mobile:
 <input type ="text" name="mobile" required /><br><br>
Email:
 <input type ="text" size = "35" name="email" required /><br><br>
Password:
 <input type ="text" name = "password" maxlength ="8" size = "8" required /><br><br>

<center><input type="submit" name="submit" value="Register"/></center>

</form>
</div>
<?php } ?>
</body>
</html>