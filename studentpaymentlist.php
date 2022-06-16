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
/** 
 * Register Page
 * 
 */
session_start();

if( isset( $_SESSION ) && isset( $_SESSION['is_loggedin'] ) ) {
	echo '<p>Welcome to <strong><i>'.$_SESSION['username'].'</i></strong>! | <a href="logout.php">Logout</a> </p><hr>';} else {
	session_destroy();
	echo(" please login to view this page");
	echo "<br><br>";
	echo "<h4><a href='http://localhost/tryouts/php/college-data/login.php'>Go to Loginpage</a> | <a href='home.html'>Home</a></h4><br>";
	die();
}


//require databaes connection 
require_once 'connection.php';

echo '<h4><a href="studentpayment.html">Add Payment</a> | <a href="home.html">Back</a></h4><br>';
// Check connection
		if ($connection->connect_error)
		 {
		    die("Connection failed: " . $connection->connect_error);
		 } 
		 //SELECT DATA FROM TABLE
		$sql = "SELECT id, student_roll_no, payment_method, amount, payment_info FROM studentpayment";
		$result = $connection->query($sql);
// print_r($result); exit;

		if ($result ->num_rows > 0) 
		{
		    echo "<table>
		    <tr>
			    <th>ID</th>
			    <th>ROLL NO</th>
			    <th>PAYMENT METHOD </th>
			    <th>AMOUNT</th>
			    <th>PAYMENT INFORMATION </th>
			    
		    </tr>";
		  //  print_r($result->fetch_assoc()); exit;
		    // output data of each row
		    while($row = $result->fetch_assoc())
		     {
		        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["student_roll_no"]. "</td><td>" . $row["payment_method"]. "</td><td>" . $row["amount"]. "</td><td>" . $row["payment_info"]. "</td></tr>";
		   	 }
		    echo "</table>";
		} 
		else 
		 {
		    echo "0 results";
		 }

		$connection->close();
		?> 

</body>
</html>