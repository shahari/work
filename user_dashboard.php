<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center"bgcolor="red"
<tr class="tableheader">
<td align="center">WELCOME TO User Dashboard</td>
</tr>
<tr class="tablerow">
<td>
<?php
if($_SESSION["user_name"]) {
?>
Welcome <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
?>
</td>
</tr>
</body></html>