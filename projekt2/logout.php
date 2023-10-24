<?php 
	
	$starttime = microtime(true);
	
	$title 			= 'Logout';
	$headline 		= 'Sie sind abgemeldet';
	$description 	= 'Das ist die Beschreibung für Google.';
	
	$login = isset($_COOKIE['admin']);
	$meldung = 'Geben Sie den richtigen Usernamen und das Passwort ein.';
	
	if($login) {
		setcookie('admin', '', 0);
		header('Location: ' . $_SERVER['PHP_SELF']);
		die;
	}
		
	
?>
<!DOCTYPE html>
<html lang="de">

  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?= $description ?>">
    <title><?= $title ?></title>
	<style>
		body{ font-family: arial;}
	</style>
	
  </head>
  
  <body>
  
	
	<h1><?= $headline; ?></h1>
	
	
	<p>
		Sie sind nicht angemeldet.<br>
		<a href="login.php">Melden Sie sich an.</a>
	</p>
	
	<p>
		<a href="login.php">zur login</a>
	</p>
	
	<footer style="text-align: right; background: #ccc; padding: 0.5em">
		
		<?= number_format(microtime(true) - $starttime, 6, ',') ?> sec
		
	</footer>
	
	
	
  </body>
  
</html>
