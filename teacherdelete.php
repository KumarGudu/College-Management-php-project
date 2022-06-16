<?php 
	/**
	 * Delete Page
	 *  
	 */

	//require databaes connection
	require_once 'connection.php';


	if (isset($_GET['id']) && is_numeric($_GET['id']))
	{

		$id = $_GET['id'];


		$result = mysqli_query( $connection, "DELETE FROM teacher WHERE id=$id" )
		or die(mysql_error());

		header("Location: teacherlist.php");
	}
	else{
		header("Location: teacherlist.php");
	}




