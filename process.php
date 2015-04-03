<?php  

	session_start();

	include('connection.php');

	$_SESSION['errors'] = array();
	$_SESSION['servers'] = array();

	if(!empty($_POST['skip']))
	{
		header('location: main.php');
		die();
	}

	if(empty($_POST['name']) || empty($_POST['quote']))
	{
		$_SESSION['errors'] = '<h3 class="red">Please fill out both fields, or use the skip to quotes button! Thanks!</h3>';
		header('location: index.php');
		die();
	}
	else
	{
		$esc_name = escape_this_string($_POST['name']);
		$esc_quote = escape_this_string($_POST['quote']);

		$query = "INSERT INTO quotes (name, quote, created_at, updated_at)
				VALUES('{$esc_name}', '{$esc_quote}', NOW(), NOW())";
		run_mysql_query($query);
		if(!run_mysql_query($query))
		{
			$_SESSION['servers'] = '<h3 class="red">Our server seems to dislike your quote. Sorry! Please try again.</h3>';
			header('location: index.php');
			die();
		}
		header('location: main.php');
		die();
	}



?>