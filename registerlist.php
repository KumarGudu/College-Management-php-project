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
	echo '<p>Welcome to <strong><i>'.$_SESSION['username'].'</i></strong>! | <a href="logout.php">Logout</a> </p><hr>';
} else {
	session_destroy();
	echo(" please login to view this page");
	echo "<br><br>";
	echo "<h4><a href='http://localhost/tryouts/php/college-data/login.php'>Go to Loginpage</a> | <a href='home.html'>Home</a></h4><br>";
	die();
}
	//require databaes connection
	require_once 'connection.php';
	echo '<h4><a href="register.html">Add New User</a> | <a href="home.html">Back</a></h4><br>';
		// Check connection
		if ($connection->connect_error)
		 {
		    die( " Connection failed: " . $connection->connect_error ) ;
		 } 
		 //SELECT DATA FROM TABLE
		$sql = " SELECT id, username, email, first_name, last_name FROM register " ;
		$result = $connection->query( $sql ) ;
// print_r($result); exit;

		if ( $result ->num_rows > 0 ) 
		{
		    echo "<table>
		    <tr>
			    <th> ID </th>
			    <th> NAME </th>
			    <th> EMAIL </th>
			    <th> FIRSTNAME </th>
			    <th> LASTNAME </th>
			    <th> EDIT </th>
			    <th> DELETE </th>
		    </tr>";
		  //  print_r($result->fetch_assoc()); exit;
		    // output data of each row
		    while($row = $result->fetch_assoc())
		     {
		        echo "<tr>";
				echo '<td><b><font color="#663300">' . $row['id'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['username'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['email'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['first_name'] . '</font></b></td>';
				echo '<td><b><font color="#663300">' . $row['last_name'] . '</font></b></td>';
				echo '<td><b><font color="#663300"><a href="registeredit.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
				echo '<td><b><font color="#663300"><a href="registerdelete.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
				echo "</tr>";

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