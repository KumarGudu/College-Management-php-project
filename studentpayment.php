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
	$student_roll_no  = $data [ 'student_roll_no' ];
	$payment_method	  = $data [ 'payment_method' ];
	$amount	  		  = $data [ 'amount' ];
	$payment_info	  = $data [ 'payment_info' ];
	$back			  = "<a href='http://localhost/tryouts/php/college-data/studentpayment.html'>Back to Register</a>";
    if (empty($student_roll_no)) { 
		echo "<h1>Roll No is required</h1><br><br>";
		echo  "$back";
	 	die();
	}
    if($student_roll_no) {
		$sql = "SELECT student_roll_no FROM student WHERE BINARY student_roll_no = '{$student_roll_no}'";
		$result = $connection->query($sql);
		$student_data = $result->fetch_assoc();
		if(empty($student_data) && !isset($student_data['student_roll_no'])) {
			echo "<h1>This Roll number '<i>".$student_roll_no."</i>' does not exit.</h1><br><br>";
			echo  "$back";
		 	die();
		}
    }   
	if (empty($payment_method))  { 
		echo "Payment Method is required<br><br>";
		echo  "$back";
		die();
	}
	if (empty($amount))  { 
		echo "Amount is required<br><br>";
		echo  "$back";
		die();
	}	
	$insert_data = "INSERT INTO studentpayment ( student_roll_no, payment_method, amount, payment_info)
	VALUES ( '{$student_roll_no}', '{$payment_method}','{$amount}','{$payment_info}' )";
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