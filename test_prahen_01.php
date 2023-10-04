<!DOCTYPE html>
<html>
<head>
	<style>
		table,td
		 {
 	   		border: 1px solid black; 	   		
 	   		color: #d96459;
 	   		font-family: monospace;
 	   		font-size:30px;
 	   		text-align: left;
		 }
		 th{
		 	border: 1px solid black;
		 	background-color: #588c7e;
		 	color: white;
		   }
	</style>
</head>
<body>
<?php
	require_once 'connection.php';
	if ($connection->connect_error){
		    die("Connection failed: " . $connection->connect_error);
	}
	$sqlstudent = "SELECT ROUND(SUM(studentpayment.amount),2) as student_payment, student.department_name 
				FROM studentpayment 
				INNER JOIN student 
				ON student.student_roll_no = studentpayment.student_roll_no 
				GROUP BY student.department_name";	
	$sqlteacher = "SELECT ROUND(SUM(teacherpayment.amount),2) as techer_payment,teacher.department_name 
				FROM teacherpayment 
				INNER JOIN teacher 
				ON teacher.regd_no = teacherpayment.regd_no 
				GROUP BY teacher.department_name";

			$sqlteacher = array();
			 while($row = oci_fetch_array($query))
			{
			    $sqlteacher[] = $row[0];       
			}
			 echo $sqlteacher[0];
