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









	/*echo "<h2>THIS IS TEACHER TABLE </h2>";
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
	}echo "<br><br><br><br>";*/
	// echo"<u>FOR STUDENT TABLE</u>";
	// echo "<br><br>";
	// foreach ($student_result as $name){
 //        print_r( $name ); echo "<br><br><br>";
        
 //    } 
 //    echo "<hr>";
	// 	echo "<br><br>";
	// 	echo"<u>FOR TEACHER TABLE</u>";
	//  	echo "<br><br>";
	//  	foreach ($teacher_result as $branch){
 //        print_r( $branch ); echo "<br><br><br>";   
 //    } 
	/*echo "<hr>";
    echo "<br><br>";
    echo "<pre>";
		print_r($student_result);
    echo "</pre>";

		echo "<br><br>";
		echo "<hr>";
    echo "<pre>";
		print_r($teacher_result);

		    echo "</pre>";
		echo "<hr>";
		echo "------------------------------------------";
echo count( $teacher_result); 
if($teacher_result >= $student_result){
	foreach ($teacher_result as  $key => $value){
		  	$key = 'teacher_result' . $key;
    		$key = $value;

		//if(array_keys {
			echo $teacher_result2;
		//}
	} 
}else
echo "bye";
*/
	$connection->close();
?> 
</body>


















 if ($key == 0){
			$teacher_0=($value {'techer_payment'});
			$dep0=($value {'department_name'});
			}
		if ($key == 1){
			$teacher_1=($value {'techer_payment'});
			$dep1=($value {'department_name'});
			}
		if ($key == 2){
			$teacher_2=($value {'techer_payment'});
			$dep2=($value {'department_name'});
			}
		if ($key == 3){
			$teacher_3=($value {'techer_payment'});
			$dep3=($value {'department_name'});
			}
		if ($key == 4){
			$teacher_4=($value {'techer_payment'});
			$dep4=($value {'department_name'});
			}
		if ($key == 5){
			$teacher_5=($value {'techer_payment'});
			$dep5=($value {'department_name'});
			}	
	} 
	foreach ($student_result as $key => $svalue){
		 if ($key == 0)
			$student=($svalue {'student_payment'});
		if ($key == 1)
			$student1=($svalue {'student_payment'});
		if ($key == 2)
			$student2=($svalue {'student_payment'});
		if ($key == 3)
			$student3=($svalue {'student_payment'});
		if ($key == 4)
			$student4=($svalue {'student_payment'});	
	} 
	 $total=$student-$teacher_0;
	 $total1=$student1-$teacher_1;
	 $total2=$student2-$teacher_2;
	 $total3=$student3-$teacher_3;
	 $total4=$student4-$teacher_5;
	/*$ans = array();
	foreach (array_keys($teacher_result + $student_result) as $key) {
	if ($key == 2){
    	$ans[0]= $teacher_result[2] + $student_result[2];
	}
}print_r($ans);*/
}
			echo "<table>
		    		<tr>	
			    		<th>Department Name</th>
			    		<th> TOTAL AMOUNT</th>
					</tr>";
		    echo "<tr>";
				echo '<td><b><font color="#663300">' . $dep0 . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $total . '</font></b></td>';				
				echo "</tr>";
			 echo "<tr>";
				echo '<td><b><font color="#663300">' . $dep1 . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $total1 . '</font></b></td>';				
				echo "</tr>";
			 echo "<tr>";
				echo '<td><b><font color="#663300">' . $dep2 . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $total2 . '</font></b></td>';				
				echo "</tr>";
			 echo "<tr>";
				echo '<td><b><font color="#663300">' . $dep3 . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $total3 . '</font></b></td>';				
				echo "</tr>";
			 echo "<tr>";
				echo '<td><b><font color="#663300">' . $dep5 . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $total4 . '</font></b></td>';				
				echo "</tr>";
		




</html>








