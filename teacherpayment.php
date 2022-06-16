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
	$regd_no          = $data [ 'regd_no' ];
	$payment_method	  = $data [ 'payment_method' ];
	$amount	  		  = $data [ 'amount' ];
	$information	  = $data [ 'information' ];
	$back			  = "<a href='http://localhost/tryouts/php/college-data/teacherpayment.html'>Back to Payment</a>";
	if($regd_no) {
		$sql = "SELECT regd_no FROM teacher WHERE BINARY regd_no = '{$regd_no}'";
		$result = $connection->query($sql);
		$teacher_data = $result->fetch_assoc();
		if(empty($student_data) && !isset($teacher_data['regd_no'])) {
			echo "<h1>This Regd number '<i>".$regd_no."</i>' does not exit.</h1><br><br>";
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
	$insert_data = "INSERT INTO teacherpayment ( regd_no, payment_method, amount, information)
	VALUES ( '{$regd_no}', '{$payment_method}','{$amount}','{$information}' )";
	if ( $connection->query($insert_data) === TRUE ) {
	    echo "New record created successfully!<br><br>";
	    echo  "$back";
	} else {
	    echo "Error: " . $insert_data . "<br>" . $connection->error. "<br>";
	}
}  else {
	echo "Please enter the required fields<br>";
	echo  "<a href='http://localhost/tryouts/php/college-data/teacer.html'>Back to Register</a>";
	die();
}

