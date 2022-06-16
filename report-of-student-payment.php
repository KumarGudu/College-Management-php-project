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
	$sql="SELECT s.student_name, s.student_roll_no, s.department_name, sp.amount from studentpayment as sp 
			LEFT JOIN student as s 
			ON s.student_roll_no = sp.student_roll_no";		
	// print_r($row); exit;			
	$result = $connection->query($sql);
	if ($result ->num_rows > 0){
		echo "<table>
		    		<tr>
			    		<th>Student Name</th>
			    		<th>Roll No</th>
			    		<th>Department Name</th>
			    		<th> AMOUNT</th>
					</tr>";
		while($row = $result->fetch_assoc()){
		    echo "<tr>";
				echo '<td><b><font color="#663300">' . $row['student_name'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['student_roll_no'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['department_name'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['amount'] . '</font></b></td>';				
				echo "</tr>";			
		}
		    echo "</table>";
	} else 
	{
		echo "0 results";
	}
	echo "<br>";echo "<br>";echo "<br>";
	$connection->close();
?> 
</body>
</html>
