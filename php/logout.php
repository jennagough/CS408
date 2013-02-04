<?php
// set the expiration date to one hour ago
setcookie("user", "", time()-3600, '/');
header("Location: /~gfb09133/CS408/index.php");
?>