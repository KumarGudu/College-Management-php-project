<?php 
/**  
 * Register Page
 * 
 */

//require databaes connection
require_once 'connection.php';

//set all post values
if( isset( $_POST ) && !empty( $_POST ) ) {


	$data 				= $_POST; //set Post data
	$username  		    = $data ['username'];
	$pass   			= $data ['pass'];
	$confirm_password   = $data ['confirm_password'];
	$email      		= $data ['email'];
	$first_name 		= $data ['first_name'];
	$last_name  		= $data ['last_name'];
	$back 				= "<a href='http://localhost/tryouts/php/college-data/register.html'>Back to Register</a>";
	if (empty($username)) 
		{
		 echo "<h1>Username is required</h1><br><br>";
		 echo  "$back";
		 die();
		}
    
    if (empty($pass)) 
    	{ 
    		echo "<h1>Password is required</h1><br><br>";
    		echo  "$back"; 
		 	die();
    	}
    if (empty($confirm_password)) 
    	{ 
    		echo "<h1>Confirm Password is required</h1><br><br>";
    		echo  "$back";
		 	die();
    	}
    if ($pass != $confirm_password)
        {
		echo "<h1>The two passwords do not match</h1><br><br>";
		echo  "$back";
		 die();
        }
    if (empty($email)) 
    	{ 
    		echo "Email is required<br><br>";
    		echo  "<a href='http://localhost/tryouts/php/college-data/register.html'>Back to Register</a>";
    		die(); 
		} 
		 
	if (empty($first_name)) 
    	{ 
    		echo "First Name is required<br><br>";
    		echo  "$back";
		 die();
		}
	if (empty($last_name)) 
    	{ 
    		echo "Last Name is required<br><br>";
    		echo  "$back";
		 die();
		}
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
		$insert_data = "INSERT INTO register ( username, pass, email, first_name, last_name )
		VALUES ( '{$username}', '{$pass}', '{$email}', '{$first_name}', '{$last_name}' )";
		if ( $connection->query($insert_data) === TRUE ) {
		    echo "New login successfully!<br><br>";
		    echo  "<a href='http://localhost/tryouts/php/college-data/login.php'><h2>Go to login</h2></a>";			
		}
		else {
		    echo "Error: " . $insert_data . "<br>" . $connection->error. "<br>";
			 }
    }else {   		
    		echo("$email is not a valid email address"); 
    		echo  "<br>$back";
		  }
} else {

	echo "Please enter the required fields<br>";
	
}


