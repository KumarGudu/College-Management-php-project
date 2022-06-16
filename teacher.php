<?php 
/**
 * Teacher Page
 * 
 */


//require databaes connection
require_once 'connection.php';

//set all post values
if( isset( $_POST ) && !empty( $_POST ) ) {

	$data 			  = $_POST; //set Post data
	$teacher_name     = $data ['teacher_name'];
	$regd_no          = $data ['regd_no'];
	$mobile_no        = $data ['mobile_no'];
	$department_name  = $data ['department_name'];
	$gender 		  = $data ['gender'];
	$information      = $data ['information'];
	$back			  = "<a href='http://localhost/tryouts/php/college-data/teacher.html'>Back to Register</a>";

	if (empty($teacher_name)) {
		echo "<h1>Teachername is required</h1><br><br>";
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
	
	if (empty($department_name)) {
		echo "Department Name is required<br><br>";
		echo  "$back";
		die();
	}
	if (empty($gender))  { 
		echo "Gender is required<br><br>";
		echo  "$back";
		die();
	}

	
	

	$insert_data = "INSERT INTO teacher ( teacher_name, regd_no, mobile_no, department_name,gender, information )
	VALUES ( '{$teacher_name}', '{$regd_no}', '{$mobile_no}','{$department_name}', '{$gender}', '{$information}' )";

	if ( $connection->query($insert_data) === TRUE ) {
	    echo "New record created successfully!<br><br>";
	    echo  "$back";
	} else {
	    echo "Error: " . $insert_data . "<br>" . $connection->error. "<br>";
	}

}  else {

	echo "Please enter the required fields<br>";
	echo  "<a href='http://localhost/tryouts/php/college-data/teacher.html'>Back to Register</a>";
	die();
}

?>