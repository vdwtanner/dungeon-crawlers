<?php
	session_start();
?>
<DOCTYPE html>
<html>
<head>
	<title>Log Off</title>
	<link rel="stylesheet" href="css/example/global.css" media="all">
	<link rel="stylesheet" href="css/example/layout.css" media="all and (min-width: 33.236em)">
</head>
<body>
	<?php
		echo $_SESSION["username"] . ", ";
		try{
			session_unset();
			session_destroy();
		}catch(Exception $e){
			echo "there was an error during logoff. Please go cry in a corner.";
		}
		echo "you were successfully logged off.";
	?>
	<a href="index.html"><button style="border-radius: 10px;">Home</button></a>
</body>
</html>