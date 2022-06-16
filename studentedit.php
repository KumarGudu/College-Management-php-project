<?php 
/**
 * Student Edit Page
 * 
 */

//require databaes connection

session_start();

if( isset( $_SESSION ) && isset( $_SESSION['is_loggedin'] ) ) {
	
	echo '<p>Welcome to <strong><i>'.$_SESSION['username'].'</i></strong>! | <a href="logout.php">Logout</a> </p><hr>';
} else {
	session_destroy();
	echo(" please login to view this page");
	echo "<br><br>";
	echo "<a href='http://localhost/tryouts/php/college-data/login.php'><h1>Back to Loginpage<h1></a>";
	die();
}
require_once 'connection.php';

if ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) {

	$id = $_GET['id'];
	$result = mysqli_query( $connection, "SELECT * FROM student WHERE id = $id" );

	while ( $row = mysqli_fetch_array( $result ) ) {
		$student_name 		= $row['student_name'];
		$student_roll_no 	= $row['student_roll_no'];
		$regd_no 			= $row['regd_no'];
		$mobile_no 			= $row['mobile_no'];
		$department_name 	= $row['department_name'];	
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
				<td colspan="2"><b><font color='Red'>Edit Records </font></b>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Name<em>*</em></font></b></td>
				<td>
					<label>
						<input type="text" name="student_name" value="<?php echo $student_name; ?>" />
					</label>
				</td>
			</tr> 

			<tr>
				<td width="179"><b><font color='#663300'>Roll_no<em>*</em></font></b></td>
				<td>	
					<label>
						<input type="text" name="student_roll_no" value="<?php echo $student_roll_no; ?>" />
					</label>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Regd no<em>*</em></font></b></td>
				<td>	
					<label>
						<input type="text" name="regd_no" value="<?php echo $regd_no; ?>" />
					</label>
				</td>
			</tr>

			<tr>
				<td width="179"><b><font color='#663300'>mobile<em>*</em></font></b></td>
				<td>
					<label>
						<input type="text" name="mobile_no" value="<?php echo $mobile_no; ?>" />
					</label>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Department Name<em>*</em></font></b></td>
				<td>
					<label>
							<select name="department_name" size="1">
							<?php if( !$department_name  ): ?>
								<option selected="" value="">Select Department</option>
							<?php endif; ?>
				            <option <?php echo ( $department_name == 'CSE' ) ? 'selected' : ''; ?>  value="CSE">CSE</option>
				            <option <?php echo ( $department_name == 'ETC' ) ? 'selected' : ''; ?> value="ETC">ETC</option>
				            <option <?php echo ( $department_name == 'IT' ) ? 'selected' : ''; ?> value="IT">IT</option>
				            <option <?php echo ( $department_name == 'EEE' ) ? 'selected' : ''; ?> value="EEE">EEE</option>
				            <option <?php echo ( $department_name == 'BIO.TECH' ) ? 'selected' : ''; ?> value="BIO.TECH">BIO.TECH</option>
				            <option <?php echo ( $department_name == 'CIVIL' ) ? 'selected' : ''; ?> value="CIVIL">CIVIL</option>
          				</select>
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
	$student_name 		= $_POST['student_name'];
	$student_roll_no 	= $_POST['student_roll_no'];
	$regd_no 			= $_POST['regd_no'];
	$mobile_no 			= $_POST['mobile_no'];
	$department_name 	= $_POST['department_name'];

	if( mysqli_query( $connection, "UPDATE student 
					SET student_name 	= '{$student_name}', 
						student_roll_no = '{$student_roll_no}',
						regd_no 		= '{$regd_no}', 
						mobile_no 		= '{$mobile_no}', 
						department_name = '{$department_name}'
						WHERE id 		= '$id'" ) ) {

			header("Location: studentlist.php");
		}
}
