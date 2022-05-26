<?php 
session_start();

$conn = new mysqli("localhost","root","","login_page");
$msg = "";
if(isset($_POST['login'])) {
    $username = $_POST['adminname'];
	$password = $_POST['password'];
	$userType = $_POST['user'];

	$sql = "SELECT * FROM admin_login WHERE user=? AND password=? AND user_type=?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sss",$username,$password,$userType);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	session_regenerate_id();
	$_SESSION['username'] = $row['user'];
	$_SESSION['role'] = $row['user_type'];
	session_write_close();

	if($result->num_rows ==1 && $_SESSION['role']=="admin") {
		header("location:adminpage.php");
	} elseif($result->num_rows ==1 && $_SESSION['role']=="teacher") {
		header("location:teacherpage.php");
	} else {
		$msg ="user name or password is incorrect";
	}

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Multi User Role Login System</title>
</head>

<body>
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="login-box">
			<h1>Multi User Role Login System</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="User name"
						name="adminname" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<div class="form-group">
				<label for="userType">I am a :</label>
                <input type="radio" name="user" value="admin" class="custom-radio" required>&nbsp;Admin |
				<input type="radio" name="user" value="teacher" class="custom-radio" required>&nbsp;Teacher 
			</div>

			<input class="button" type="submit" name="login" value="Sign In">
			<h5 class="text-danger text-center"><?= $msg; ?></h5>
		</div>
	</form>
</body>

</html>
