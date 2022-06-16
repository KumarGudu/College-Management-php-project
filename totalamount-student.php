<!DOCTYPE html>
<html>
<head>
	<style>
		table, td
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
	$sql="SELECT ROUND(SUM(studentpayment.amount),2),student.department_name 
			FROM studentpayment 
			INNER JOIN student 
			ON student.student_roll_no = studentpayment.student_roll_no 
			GROUP BY student.department_name";		
	$result = $connection->query($sql);
	if ($result ->num_rows > 0){
		echo "<table>
		    		<tr>	
			    		<th>Department Name</th>
			    		<th> TOTAL AMOUNT</th>
					</tr>";
		while($row = $result->fetch_assoc()){
		    echo "<tr>";
				echo '<td><b><font color="#663300">' . $row['department_name'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['ROUND(SUM(studentpayment.amount),2)'] . '</font></b></td>';				
				echo "</tr>";
		}
		    echo "</table>";
	} else 
		echo "0 results";	
	$connection->close();
?> 
</body>
</html>