<?php 
	/**
	 * Delete Page
	 * 
	 */
session_start();
print_r($_SESSION);

if( isset( $_SESSION ) && isset( $_SESSION['is_loggedin'] ) ) {
	
	echo '<p>Welcome to <strong><i>'.$_SESSION['username'].'</i></strong>! | <a href="logout.php">Logout</a> </p><hr>';
} else {
	session_destroy();
	echo("please login to view this page");
	echo "<br><br>";
	echo "<a href='http://localhost/tryouts/php/college-data/login.php'><h1>Back to Loginpage<h1></a>";
	die();
}

	//require databaes connection
	require_once 'connection.php';


	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{

		$id = $_GET['id'];


		$result = mysqli_query( $connection, "DELETE FROM student WHERE id=$id" )
		or die(mysql_error());

		header("Location: studentlist.php");
	}
	else{
		header("Location: studentlist.php");
	}





