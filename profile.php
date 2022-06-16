<?php
	session_start();
	if( ! isset( $_SESSION ) &&  ! isset( $_SESSION['is_loggedin'] ) ) {
		session_destroy();
		header( "Location: login.php" );
	}
	$username = ( isset( $_SESSION['username'] ) ) ? $_SESSION['username'] : '';

echo '<p>Welcome to <strong><i>'.$username.'</i></strong>! | <a href="logout.php">Logout</a></p><hr>';
		echo " <a href='http://localhost/tryouts/php/college-data/studentlist.php'>
				<h1> Student-List</h1></a> ";
		echo " <a href='http://localhost/tryouts/php/college-data/teacherlist.php'>
				<h1> Teacher-List</h1></a> ";
		echo " <a href='http://localhost/tryouts/php/college-data/registerlist.php'>
				<h1> Register-List</h1></a> ";
		echo " <a href='http://localhost/tryouts/php/college-data/studentpaymentlist.php'>
				<h1> Student Payment-List</h1></a> ";
		echo " <a href='http://localhost/tryouts/php/college-data/teacherpaymentlist.php'>
				<h1> Teacher Payment-List</h1></a> ";







				