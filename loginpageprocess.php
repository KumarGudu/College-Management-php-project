<?php
	//get values pass from the loginpage.php file
	//require databaes connection
	require_once 'connection.php';
if( isset( $_POST ) && !empty( $_POST ) ) {
	$data 				= $_POST; //set Post data
	$username  		    = $data ['username'];
	$pass   		= $data ['pass'];
	$back 				= "<br><br><a href='http://localhost/tryouts/php/college-data/loginpage.php'><h1>Back to loginpage</h1></a>";

	
	$username = mysqli_real_escape_string( $connection, $username );
	$pass = mysqli_real_escape_string( $connection, $pass );

	
	$result = mysqli_query( $connection, " SELECT * FROM register WHERE BINARY username = '{$username}' AND BINARY pass = '{$pass}' " )
	or die( " Failed to query databaes ".mysqli_error() );
	$row = mysqli_fetch_array( $result );
	//print_r($row); exit;
	session_start();

	if ( $row ['username'] == $username && $row ['pass'] == $pass ){
		
		$_SESSION['is_loggedin'] = 1;
		$_SESSION['username'] = $row['username'];
		header( "Location: profile.php" );

	}else {
		echo "<h2> invalid username or password </h2>";
		echo " $back " ;
		
		$_SESSION['is_loggedin'] = 0;
		unset( $_SESSION['username'] );
	}
}

?>