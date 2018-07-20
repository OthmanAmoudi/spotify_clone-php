<?php
	include("includes/config.php");
	if(isset($_SESSION['loggedInUser'])){
		$usernameOfLoggedInUser = $_SESSION['loggedInUser'];
	}else{
		header("Location: register.php");
	}

?>
<html>
<head>
	<title>Welcome to Slotify!</title>
</head>

<body>
	Hello!
</body>

</html>