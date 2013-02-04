<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
function authenticated($username, $password) {
	$clean_username = strip_tags(stripslashes($username));
	$clean_password = strip_tags(stripslashes($password));
	// Connect to Database Server
	mysql_connect("devweb2012.cis.strath.ac.uk", "gfb09133", "gysfeame");
	// Choose database
	mysql_select_db("gfb09133") or die(mysql_error());
	// Build SQL query to find row in database with matching $username and $password
	$searchUser = "SELECT * FROM users WHERE username = '$clean_username' AND password = '$clean_password'";
	// Execute query
	$result = mysql_query($searchUser) or die(mysql_error());
	// IF number of rows is equal to one
	if (mysql_num_rows($result) > 0) {
		return true;
	}
	else {
		return false;
	}
}
if ($username != "" && $password != "")
{
	 if (!authenticated($username, $password)) {
        // Print a message about incorrect credentials
		echo "Wrong username/password.";
		echo "<BR><a href=javascript:history.go(-1)>Go back</a>";
        exit;
    }

    else {
		echo "Success";
		$expire=time()+60*60*24*30;
		setcookie("user", $username, $expire, '/');
		header("Location: /~gfb09133/CS408/index.php");
    }
}
else
{
	echo "Please enter a username/password";
	echo "<BR><a href=javascript:history.go(-1)>Go back</a>";
}
?>