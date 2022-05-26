<!doctype html>
<html>
<head>
<script type="text/javascript" src="student_validate.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
h1{text-align:center;margin-top:100px;}
form{margin-left:40px;margin-right:40px;}
.button{background-color:green;color:white;border:none;width:100%;height:50px;margin-bottom:50px;}
</style>
</head>
<title>form</title>
<body>
<style>body{background-color:skyblue;border:15px solid pink;}>
</style>
<h1>Student Registration Form</h1>
</br>
<hr style="height:2px;width:50%;text-align:centre;background-color:white">
<form action="result.php" id="#form" method="post" enctype="multipart/form-data" name="myform" onSubmit=" return validateForm();">
<label><b>Firstname
</b></label>
</br>
<input type="text" class="form-control" placeholder="Firstname" name="Firstname"  id="Ftname">
<span id="fname" class="text-danger font-weight-bold"></span>
</br></br>
<label><b>Middlename:
</br></label>
</br>
<input type="text" class="form-control" placeholder="Middlename" name="Middlename" id="Mname">
<span id="mid" class="text-danger font-weight-bold"></span>
</br></br>
<label><b>Lastname:</b></label>
</br>
<input type="text" class="form-control" placeholder="Lastname" name="Lastname" id="Lname">
<span id="lt" class="text-danger font-weight-bold"></span>
</br></br>
<label><b>Class:</b></label>
<select name="Cls" id="Cls" autofocus>
<option>Class</option>
<option value="Class 1">Class 1</option>
<option value="Class 2">Class 2</option>
<option value="Class 3">Class 3</option>
</select></br></br>
<span id="cor" class="text-danger font-weight-bold"></span><br>
<label><b>Division:</b></label>
<select name="division" id="division" autofocus>
<option>Division</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
</select>
</br></br>
<label><b>Gender:</b></label></br>
<input type="radio" name="gender" value="Male" >Male</input>
<input type="radio" name="gender" value="Female">Female</input>
<input type="radio" name="gender" value="Other">Other</input><br>
<span id="ge" class="text-danger font-weight-bold"></span><br>
<label><b>Upload Image</b></label></br>
<input type="file" name="f1">
</br></br>
<label><b>Phone:</b></label></br>
<input type="text" class="form-control" value="+91"></br>
<input type="text" class="form-control" placeholder="phoneno." name="Phone" id="phone"></br>
<span id="ph" class="text-danger font-weight-bold"></span>
<br>
<br>
<label class="label"><b>Current Address:</b></label></br>
<textarea id="Current Address" name="CurrentAddress" rows="4" cols="175" placeholder="Current Address" class="form-control" >
</textarea></br>
<span id="ca" class="text-danger font-weight-bold"></span>
<br>
<label><b>Email:</b></label></br>
<input type="text" class="form-control" placeholder="Enter Email" name="Email" id="email"></br>
<span id="em" class="text-danger font-weight-bold"></span>
<br>
<br>
<label><b>Password:</b></label></br>
<input type="password" class="form-control" placeholder="Enter Password" name="Password" id="password"></br>
<span id="pa" class="text-danger font-weight-bold"></span>
<br><br>
<label><b>Re-type Password:</b></label></br>
<input type="password" class="form-control" placeholder="Re-type Password" name="Retype_password" id="conpass"></br>
<span id="conf" class="text-danger font-weight-bold"></span>
<br><br>
<button class="button">Register</button>
<p id="demo"></p>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
