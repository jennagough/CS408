<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Seaom - An Automated Online Exercise Marking System</title>
<!--Will need to check if browser is compatible-->
<!--Use the standard stylesheet-->
<link rel="stylesheet" href="css/chrome.css" type="text/css" />
</head>
<body id="index" class="home">
<header id="login" class="body">
<?php
if (isset($_COOKIE["user"]))
  echo "<br>Hello <a href=\"profile.php\">" . $_COOKIE["user"] . "</a> | <a href=\"php/logout.php\">Logout</a>";
else
  echo "<br><a href=\"login.php\">Login</a>";
?>

</header>
<header id="banner" class="body">
<hgroup>
<h1><a href="index.php">Seaom</a></h1>
<h2>The Automated Online Exercise Marking System</h2>
</hgroup>
<nav><ul>
<li><a href="index.php">Home</a></li>
<!--If student display one toolbar-->
<?php
if (isset($_COOKIE["user"])) {
  echo "<li><a href=\"classes.php\">Classes</a></li>";
  echo "<li><a href=\"assignments.php\">Assignments</a></li>";
  echo "<li><a href=\"results.php\">Results</a></li>";
  echo "<li><a href=\"calendar.php\">Calendar</a></li>";
  }
?>
<!--Else if lecturer display another-->
<li><a href="faqs.php">FAQs</a></li>
<li><a href="about.php">About</a></li>
</ul></nav></header>