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
	$sql="SELECT ROUND(SUM(teacherpayment.amount),2),teacher.department_name 
		FROM teacherpayment 
		INNER JOIN teacher 
		ON teacher.regd_no = teacherpayment.regd_no 
		GROUP BY teacher.department_name";		
	$result = $connection->query($sql);
	if ($result ->num_rows > 0){
		echo "<table>
		    		<tr>	
			    		<th>DEPARTMENT NAME</th>
			    		<th> TOTAL AMOUNT</th>
					</tr>";
		while($row = $result->fetch_assoc()){
		    echo "<tr>";
				echo '<td><b><font color="#663300">' . $row['department_name'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['ROUND(SUM(teacherpayment.amount),2)'] . '</font></b></td>';				
				echo "</tr>";
		}
		    echo "</table>";
	} else 
		echo "0 results";	
	$connection->close();
?> 
</body>
</html>