<?php
 if (isset($_POST['search'])){
 	$valueToSearch = $_POST['valueToSearch'];
 	$query = "SELECT * FROM `student` WHERE CONCAT(`Id`, `student_name`, `student_roll_no`, `regd_no`) LIKE '%".$valueToSearch."%'";
 	//print_r($query); exit;

 	$search_result = filterTable($query);
 	//print_r($search_result); exit;

 }else{
 	$query = "SELECT * FROM student";
 	$search_result = filterTable($query);
 }
 function filterTable($query){
 	require_once 'connection.php';
 	$filter_Result = mysqli_query($connection, $query);
 	return $filter_Result;
 }
?>
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
	<form action="searchstudentdata.php" method="post">
		<input type="text" name="valueToSearch" placeholder="value To Search"><br><br>
		<input type="submit" name="search" value="Filter"><br><br>

		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Roll No</th>
				<th>Regd. No</th>
			</tr>
			<?php while($row = mysqli_fetch_array($search_result)):?>
			<tr>
				<tr>
				<td><?php echo $row['Id'];?></td>
				<td><?php echo $row['student_name'];?></td> 
				<td><?php echo $row['student_roll_no'];?></td> 
				<td><?php echo $row['regd_no'];?></td> 
			 
			</tr>
			
		<?php endwhile;?>
			
		</table>
	</form>

