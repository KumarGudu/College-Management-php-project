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

	echo "<h2>THIS IS TEACHER TABLE </h2>";
		$resultteacher = $connection->query($sqlteacher);
	 
	 $teacher_result = array();
	if ($resultteacher ->num_rows > 0){
		echo "<table>
		    		<tr>	
			    		<th>Department Name</th>
			    		<th> TOTAL AMOUNT</th>
					</tr>";
		while($row = $resultteacher->fetch_assoc()){
		    echo "<tr>";
				echo '<td><b><font color="#663300">' . $row['department_name'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['techer_payment'] . '</font></b></td>';				
				echo "</tr>";
				$teacher_result[] = $row;

		}
		    echo "</table>";
	} else 
		echo "0 results";


		echo "<br><br><br>";
		echo "<h2>THIS IS STUDENT TABLE </h2>";

	$resultstudent = $connection->query($sqlstudent);
	$student_result = array();
	if ($resultstudent->num_rows > 0){
		echo "<table>
		    		<tr>	
			    		<th>Department Name</th>
			    		<th> TOTAL AMOUNT</th>
					</tr>";
		while($row = $resultstudent->fetch_assoc()){
		    echo "<tr>";
				echo '<td><b><font color="#663300">' . $row['department_name'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['student_payment'] . '</font></b></td>';				
				echo "</tr>";
				$student_result[] = $row;
		}
		    echo "</table>";
	} else {
		echo "0 results";
	}echo "<br><br><br><br>";
	 
if($teacher_result >= $student_result){
	foreach ($teacher_result as $key => $value){
		if ($key == 0){
			$teacher_0=($value {'techer_payment'});
			$dep0=($value {'department_name'});
			$key ++;
			}
			 echo "<tr>";
				echo '<td><b><font color="#663300">' . $dep4 . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $teacher_4 . '</font></b></td>';				
				echo "</tr>";
				$student_result[] = $row;

	$connection->close();
?> 
</body>
</html>