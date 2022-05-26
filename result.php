<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$Firstname=$_POST["Firstname"];
$Middlename=$_POST["Middlename"];
$Lastname=$_POST["Lastname"];
$Cls=$_POST["Cls"];
$Divs=$_POST["division"];
$GEN=$_POST["gender"];
$Phone=$_POST["Phone"];
$Current_Address=$_POST["CurrentAddress"];
$Email=$_POST["Email"];
$Password=$_POST["Password"];
$Retype_password=$_POST["Retype_password"];
if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
}
	echo "<h2>Your Input is :</h2>";
	echo "<br>";
	echo "Your Firstname:".$Firstname;
	echo "<br>";
	echo "<br>";
    echo "Your Image:".$img;
	echo "<br>";
	echo "<br>";
	echo "Your Middlename:".$Middlename;
	echo "<br>";
	echo "<br>";
	echo "Your Lastname:".$Lastname;
	echo "<br>";
	echo "<br>";
	echo "Your Class:".$Cls;
	echo "<br>";
	echo "<br>";
    echo "Your Division:".$Divs;
	echo "<br>";
	echo "<br>";
	echo "Your Gender:".$GEN;
	echo "<br>";
	echo "<br>";
	echo "Your Phone no is:".$Phone;
	echo "<br>";
	echo "<br>";
	echo "Your Current Address is:".$Current_Address;
	echo "<br>";
	echo "<br>";
	echo "Your Email:".$Email;
	echo "<br>";
	echo "<br>";
	echo "Your Passwaord:".$Password;
	echo "<br>";
?>
</body>
</html>
