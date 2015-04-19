<?php
	session_start();
	$account = mysql_real_escape_string($_POST['account']);
	$password = mysql_real_escape_string($_POST['password']);

	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("SELECT * from admin WHERE account='$account'"); //Query the users table if there are matching rows equal to $account
	$exists = mysql_num_rows($query); //Checks if account exists
	$table_account = "";
	$table_password = "";
	if($exists > 0) //IF there are no returning rows or no existing account
	{
		while($row = mysql_fetch_assoc($query)) //display all rows from query
		{
			$table_account = $row['account']; // the first account row is passed on to $table_account, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_account, and so on until the query is finished
		}
		if(($account == $table_account) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password)
				{
					$_SESSION['user'] = $account; //set the account in a session. This serves as a global variable
					header("location: admin.php"); // redirects the user to the authenticated home page
				}
				
		}
		else
		{
			Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("index.php");</script>'; // redirects to login.php
		}

	}
	else
	{
		Print '<script>alert("Incorrect account!");</script>'; //Prompts the user
		Print '<script>window.location.assign("index.php");</script>'; // redirects to login.php
	}
?>