
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="POST" action="connect.php">
	<div class="input-group">
		<label>Firstname</label>
		<input type="text" name="firstname" required>
	</div>
	<div class="input-group">
		<label>Middlename</label>
		<input type="text" name="middlename" required>
		</div>
		<div class="input-group">
		
		<label>Lastname</label>
		<input type="text" name="lastname" required>
	
	</div>
	<div class="input-group">
		
		<label>FarmerID</label>
		<input type="text" name="farmerid" required>
	
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email"  required>
	</div>
	<div class="input-group">
		
		<label>Collection Center</label>
		<input type="text" name="collectioncenter" required>
	
	</div>
	<div class="input-group">
		
		<label>Phone Number</label>
		<input type="text" name="phonenumber" required>
	
	</div>
	<div class="input-group">
		
		<label>Bank Name</label>
		<input type="text" name="bankname" required>
	
	</div>
	<div class="input-group">
		
		<label>Bank Branch</label>
		<input type="text" name="bankbranch" required>
	
	</div>
	<div class="input-group">
		
		<label>Account Number</label>
		<input type="text" name="accountnumber" required>
	
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" required>
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" required>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register">Register</button>
	</div>
	<p>
		Already a member? <a href="admin.php">Sign in</a>
	</p>
</form>
    <style>
        * { margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background: #F8F8FF;
}
.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 40%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block; 
	width: 50px; 
	height: 50px; 
	margin: 5px;
	float: left;
}
.profile_info div {
	display: inline-block; 
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
    </style>
</body>
</html>