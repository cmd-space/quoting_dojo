<?php  

	session_start();

	include('connection.php');

	$query = "SELECT name, quote, created_at FROM quotes ORDER BY created_at DESC";

	$result = fetch($query);
	// var_dump($result);

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
			width: 40em;
			margin-left: auto;
			margin-right: auto;
		}
		h1
		{
			text-align: center;
		}
		.border
		{
			padding-left: 4em;
			border-bottom: 1px solid black;
		}
	</style>
</head>
<body>
	<h1>Here are the awesome quotes!</h1>
	<?php  
		foreach ($result as $value) 
		{
			echo '<p>"'.$value['quote'].'"</p>
					<p class="border">-'.$value['name'].' at '.$value['created_at'];
		}
	?>
</body>
</html>