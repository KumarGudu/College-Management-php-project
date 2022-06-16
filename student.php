<?php 
/**
 * Register Page
 * 
 */
//require databaes connection
require_once 'connection.php';
//set all post values
if( isset( $_POST ) && !empty( $_POST ) ) {
	$data 			  = $_POST; //set Post data
	$student_name     = $data ['student_name'];
	$student_roll_no  = $data ['student_roll_no'];
	$regd_no          = $data ['regd_no'];
	$mobile_no        = $data ['mobile_no'];
	$information      = $data ['information'];
	$department_name  = $data ['department_name'];
	$back			  = "<a href='http://localhost/tryouts/php/college-data/student.html'>Back to Register</a>";
	if (empty($student_name)) {
		echo "<h1>Studentname is required</h1><br><br>";
		echo  "$back";
		die();
	}    
    if (empty($student_roll_no)) { 
		echo "<h1>Roll No is required</h1><br><br>";
		echo  "$back";
	 	die();
	}
    if (empty($regd_no))  {
		echo "<h1>Regd No  is required</h1><br><br>";
		echo  "$back";
	 	die();
	}    
    if (empty($mobile_no))  { 
		echo "Mobile No is required<br><br>";
		echo  "$back";
		die();
	}
	if (empty($information))  { 
		echo "Information is required<br><br>";
		echo  "$back";
		die();
	}
	if (empty($department_name)) {
		echo "Department Name is required<br><br>";
		echo  "$back";
		die();
	}
	$insert_data = "INSERT INTO student ( student_name, student_roll_no, regd_no, mobile_no, information, department_name)
	VALUES ( '{$student_name}', '{$student_roll_no}', '{$regd_no}', '{$mobile_no}', '{$information}','{$department_name}' )";
	// echo $insert_data;
	// exit ;

	if ( $connection->query($insert_data) === TRUE ) {
	    echo "New record created successfully!<br><br>";
	    echo  "$back";
	} else {
	    echo "Error: " . $insert_data . "<br>" . $connection->error. "<br>";
	}
}  else {
	echo "Please enter the required fields<br>";
	echo  "<a href='http://localhost/tryouts/php/college-data/student.html'>Back to Register</a>";
	die();
}
?>