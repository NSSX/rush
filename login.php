<?php
	session_start();
?>
<?php foreach($_GET as $key => $elem)
{
	if($key == "login")
	{
		$login = $elem;
		$_SESSION["login"] = $login;
	}
	else if($key == "passwd")
	{
		$passwd = $elem;
		$_SESSION["passwd"] = $passwd;
	}
}
?>
<?php
	include "auth.php";

	if(auth($login, $passwd) == TRUE)
	{
		$_SESSION['loggued_on_user'] = $login;
		echo"OK\n";
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo"ERROR\n";
	}
?>