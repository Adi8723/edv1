<?php
//index.php
require_once "Person.php";
require_once "include/datenbank.php";

session_start();


$action = isset($_GET['action']) ? $_GET['action'] : null;
$view = $action;
if (is_null($action)) {
	$view = "index";
}

switch ($action) {
	case 'person_register':
		if (
			!empty($_POST['anrede']) && !empty($_POST['vorname']) && 
			!empty($_POST['nachname']) && !empty($_POST['ort']) && !empty($_POST['email']) && !empty($_POST['passwort'])
			){

			$person = new Person($_POST);
			$person->insert($db);

			//list($anrede, $vorname, $nachname, $ort, $email, $passwort)= array_values($_POST);
		} else {
			$_SESSION['errors'] = "Bitte Formular ausfüllen!";
		}

	case "person_login":
		if (!empty($_POST['login']) && !empty($_POST['passwort'])) {
			$login = $_POST['login'];
			$passwort = $_POST['passwort'];
		} else {
			$_SESSION['errors'] = "Bitte Formular ausfüllen!";
		}
		/*try {
	  require_once "include/datenbank.php";
	  $sql = "SELECT COUNT(*) AS anzahl FROM benutzer WHERE login = '$login'";

	$stm = $conn->prepare($sql);
	$stm->execute();*/
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Home</title>
</head>

<body>
	<h1>Home</h1>

	<?php require_once "include/navi.php"; ?>

	<?php require_once "view/" . $view . ".php"; ?>

	<?php if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
	?>

	<?php if (isset($_SESSION['errors'])) {
		echo $_SESSION['errors'];
		unset($_SESSION['errors']);
	}
	?>

</body>

</html>