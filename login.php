<!DOCTYPE HTML>
<html>
<head>
<title>Login Page</title>
<style type="text/css">
	.login-form {
		width: 260px;
		margin: 0 auto;
		background-color: #eee;
		padding: 10px;	
	}
	table{
		border-collapse: collapse;
		width: 100%;
	}
	td{
		font-size: 16px;
		padding: 5px;
	}
	input[type="text"],
	input[type="password"] {
		width: 92%;
		background-color: #FFF;
		border: 1px solid #CCC;
		padding: 8px 10px;
	}
	.button {
		padding: 7px 25px;
		border: none;
	}
	.submit-btn {
		background-color: #f00;
		color: #FFF;
	}
	.submit-btn:hover {
		background-color: #b00606;
	}
	.reset-btn {
		background-color: #999;
		color: #FFF;
	}
	.reset-btn:hover {
		background-color: #666;
		color: #FFF;
	}	
</style>
</head>
<body>
		<div style="width: 1024px; margin: 0 auto;">
			<form class="login-form" name="Loginform" method="post" action="loginpageprocess.php">
				<table>					
					<tr>
						<td colspan="2" style="text-align: center;"><h2>Login Page</h2></td>
					</tr>
					<tr>
						<td style="width: 25%;"><label for="username">Username</label></td>
						<td style="width: 75%;"><input type="text" name="username" id="username"></td>
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td><input type="password" name="pass" id="pass"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input class="button submit-btn" type="submit" value="Login"> <input class="button reset-btn" type="Reset"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a href='http://localhost/tryouts/php/college-data/register.html'>Go to register page</a>
						</td>
					</tr>
				</table>
			</form>

		</div>
		
</body>
</html>
