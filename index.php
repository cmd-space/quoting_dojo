<?php  

	session_start();

	include('connection.php');

	if(!isset($_SESSION['errors']))
	{
		$_SESSION['errors'] = array();
	}

	if(!isset($_SESSION['servers']))
	{
		$_SESSION['servers'] = array();
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QuotingDojo</title>
	<style>
		body
		{
			font-family: sans-serif;
			margin-left: auto;
			margin-right: auto;
			width: 40em;
		}
		.red
		{
			color: red;
		}
		form
		{
			display: inline-block;
		}
		.inline
		{
			margin-left: -10em;
		}
		form label
		{
			vertical-align: top;
		}
		form input
		{
			margin-bottom: 1em;
		}
		#add
		{
			margin-left: 3em;
			margin-right: 10em;
		}
	</style>
</head>
<body>
	<h1>Welcome to QuotingDojo</h1>
	<?php  
		if (!empty($_SESSION['errors'])) 
		{
			echo $_SESSION['errors'];
		}
		if(!empty($_SESSION['servers']))
		{
			echo $_SESSION['servers'];
		}
		
	?>
	<form action="process.php" method="post">
		<label for="name">Your name: </label>
		<input type="text" name="name"><br>
		<label for="quote">Your quote: </label>
		<textarea name="quote" cols="50" rows="10"></textarea><br>
		<input type="submit" id="add" value="Add my quote!">
	</form>
	<a href="main.php">Skip</a>
	<!-- <form action="process.php" method="post" class="inline">
		<input type="hidden" name="skip" value="skipme">
		<input type="submit" value="Skip to quotes!">
	</form> -->
</body>
</html>