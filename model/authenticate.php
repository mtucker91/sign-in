<?php
require('connect.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$rememberme = $_POST['rememberme'];

//$return = array();
/*
if($rememberme == 1){
	setcookie('username', $username, time() + (60*60*24*30), "/");
}
else{
	setcookie('username', '', time() - (60*60*24*30), "/");
}
*/
if(isset($username, $password)){ //if there is something in the text fields
//echo("entered the if statement");
	$db = new PDO("mysql:host=$hostname;dbname=$dbn", $usern, $passw);
	//execute the SQL query and return records
	$sth = $db->prepare("SELECT * FROM ROST_EMPLOYEES WHERE username = ? LIMIT 1");

	$sth->execute([$username]);
	//OR
	//$sth->execute(['username' => $username);
	$r = $sth->fetchAll(PDO::FETCH_ASSOC);
	//fetch tha data from the database for at least one row.
	foreach($r as $row){
		//************* SIGN IN SUCCESSFUL ***********************************
		if($row['password'] == $password){ //if the password given by the user matches the password in the database.
			//session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $row['first_name'];
			//unset($_SESSION['error']);
			//header('Location: ../home.php');
			$result = "success";
			die($result);
			//die("home.php");
			//setcookie('username', $username, time()+(3600 * 24), "/");  // expire in 1 hour 
			//go to next page
		}
		//*************** END SIGN IN SUCCESSFUL *********************************
		else{ //else, if the password given by the user DOES NOT match the password in the database.
			$result = "Incorrect Password";
			die($result);
			//header('Location: ../index.php');
			//$error['password'] = "Your password is incorrect.  Please try again."; //display that the password DOES NOT match.
			//return back to sign-in with error
		}
	} //the actual query to be implemented.
	//echo ("Out of Loop");
	if(!isset($result)){
		die("Bad Username");
	}
	
	//header('Location: ../index.php');
}

//echo("Did not notice the POST at all");

/*
From Tutorial
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	if (password_verify($_POST['password'], $password)) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}

*/



/*if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}
*/


/*
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
*/


$db = null; //closing connection created by connect.php
?>