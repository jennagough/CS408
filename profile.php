<?php
include ('header.php');
session_start();
if (isset($_COOKIE["user"])){
mysql_connect("devweb2012.cis.strath.ac.uk", "gfb09133", "gysfeame");
mysql_select_db("gfb09133") or die(mysql_error());
$user = $_COOKIE["user"];
$searchUser = "SELECT * FROM users WHERE username = $user";
}
else
	header("Location: index.php");
?>

<aside id="text" class="body">
	<article>
	<h2>Profile</h2>
	</article>
</aside>

<?php
include ('footer.php');
?>