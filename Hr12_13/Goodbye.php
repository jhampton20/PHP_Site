<html>
 <!-- I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for$
Juwan Hampton
CSC155-201H -->
<head>
<title>Goodbye!</title>
<?php
session_start();
session_destroy();
header("refresh: 5, url=log_in.php");
?>
</head>
<body>
<center><b>YOU HAVE BEEN LOGGED OUT. CLICK BELOW TO LOGIN AGAIN</b></center>
<form method="POST" action="log_in.php">
<center><input type='submit' value="Login Again?"/></center>
</form>
</body>
</html>
