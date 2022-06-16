<?php 
/**
 * User Edit Page
 * 
 */ 

//require databaes connection
require_once 'connection.php';

if ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) {

	$id = $_GET['id'];
	$result = mysqli_query( $connection, "SELECT * FROM register WHERE id = $id" );

	while ( $row = mysqli_fetch_array( $result ) ) {
		$username 		= $row['username'];
		$password 		= $row['password'];
		$email 			= $row['email'];
		$first_name 	= $row['first_name'];
		$last_name 		= $row['last_name'];
			
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Student Records</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>

		<table border="1">
			<tr>
				<td colspan="2"><b><font color='Red'>Edit User's Records </font></b>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>User Name<em>*</em></font></b></td>
				<td>
					<label>
						<input type="text" name="username" value="<?php echo $username; ?>" />
					</label>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Password<em>*</em></font></b></td>
				<td>	
					<label>
						<input type="text" name="password" value="<?php echo $password; ?>" />
					</label>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Email<em>*</em></font></b></td>
				<td>	
					<label>
						<input type="text" name="email" value="<?php echo $email; ?>" />
					</label>
				</td>
			</tr>

			<tr>
				<td width="179"><b><font color='#663300'>First_name<em>*</em></font></b></td>
				<td>
					<label>
						<input type="text" name="first_name" value="<?php echo $first_name; ?>" />
					</label>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Last name<em>*</em></font></b></td>
				<td>
					<label>
						<input type="text" name="last_name" value="<?php echo $last_name; ?>" />
					</label>
				</td>
			</tr>

			<tr align="Right">
			<td colspan="2">
				<label>
					<input type="submit" name="submit" value="Edit Records">
				</label>
			</td>
			</tr>
		</table>
</form>
</body>
</html>

<?php 


if ( isset( $_POST['submit'] ) ) {

	$id 				= $_POST['id'];
	$username 			= $_POST['username'];
	$password 			= $_POST['password'];
	$email 				= $_POST['email'];
	$first_name 		= $_POST['first_name'];
	$last_name 			= $_POST['last_name'];

	if( mysqli_query( $connection, "UPDATE register 
					SET username 		= '{$username}', 
						password 		= '{$password}',
						email 			= '{$email}', 
						first_name 		= '{$first_name}', 
						last_name 		= '{$last_name}'
						WHERE id 		= '$id'" ) ) {

			header("Location: registerlist.php");
		}
}
