<?php

session_start();

if( isset( $_SESSION ) ) {
	unset( $_SESSION['is_loggedin'] );
	unset( $_SESSION['email'] );
	session_destroy();
}

if( !isset( $_SESSION['is_loggedin'] ) && !isset( $_SESSION['email'] ) ) {
	header( "Location: login.php" );
}
