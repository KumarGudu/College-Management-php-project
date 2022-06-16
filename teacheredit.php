<?php 
/**
 * Ueer Edit Page
 * 
 */

//require databaes connection
require_once 'connection.php';

if ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) {

	$id = $_GET['id'];
	$result = mysqli_query( $connection, "SELECT * FROM teacher WHERE id = $id" );

	while ( $row = mysqli_fetch_array( $result ) ) {
		$teacher_name 		= $row['teacher_name'];
		$regd_no 			= $row['regd_no'];
		$mobile_no 			= $row['mobile_no'];
		$gender 			= $row['gender'];
		$department_name 	= $row['department_name'];
			
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Teacher Records</title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>

		<table border="1">
			<tr>
				<td colspan="2"><b><font color='Red'>Edit Teacher's Records </font></b>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Teacher Name<em>*</em></font></b></td>
				<td>
					<label>
						<input type="text" name="teacher_name" value="<?php echo $teacher_name; ?>" />
					</label>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Regd_no<em>*</em></font></b></td>
				<td>	
					<label>
						<input type="text" name="regd_no" value="<?php echo $regd_no; ?>" />
					</label>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Mobile_no<em>*</em></font></b></td>
				<td>	
					<label>
						<input type="text" name="mobile_no" value="<?php echo $mobile_no; ?>" />
					</label>
				</td>
			</tr>

			<tr>
				<td width="179"><b><font color='#663300'>Gender<em>*</em></font></b></td>
				<td>
					<label>
						<input type="radio" name="gender" value="M" />Male
						<input type="radio" name="gender" value="F" />Female
					
					</label>
				</td>
			</tr>
			<tr>
				<td width="179"><b><font color='#663300'>Department name<em>*</em></font></b></td>
				<td>
					<label>
						<select name="department_name" >
				            <option selected value="">Select Branch Name</option>
				            <option value="CSE">CSE</option>
				            <option value="ETC">ETC</option>
				            <option value="IT">IT</option>
				            <option value="EEE">EEE</option>
				            <option value="BIO.TECH">BIO.TECH</option>
				            <option value="CIVIL">CIVIL</option>
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
	$teacher_name 		= $_POST['teacher_name'];
	$regd_no 			= $_POST['regd_no'];
	$mobile_no 			= $_POST['mobile_no'];
	$gender 			= $_POST['gender'];
	$department_name 	= $_POST['department_name'];

	if( mysqli_query( $connection, "UPDATE teacher 
					SET teacher_name 	= '{$teacher_name}', 
						regd_no 		= '{$regd_no}',
						mobile_no 		= '{$mobile_no}', 
						gender 			= '{$gender}', 
						department_name = '{$department_name}'
						WHERE id 		= '$id'" ) ) {

			header("Location: teacherlist.php");
		}
}
