
<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>





<!DOCTYPE html>
<head>
    
    <title></title>
</head>
<body>
    <H1>THIS IS USER HOME PAGE</H1><?php echo $_SESSION["username"]  ?>

    <a href="logout.php">Logout</a>
</body>
</html>