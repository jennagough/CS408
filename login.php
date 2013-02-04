<?php
include ('header.php');
?>
<aside id="text" class="body"><article>
		<h2>Log in</h2>
		<p><form method="POST" action="php/loginscript.php">
		<br>Username:<input type="text" name="username">
		<br>Password:<input type="password" name="password">
		<br>
		<br><input type="submit" value="Submit">
		</form>
		
		</article></aside>
<?php
include ('footer.php');
?>