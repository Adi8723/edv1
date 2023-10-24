<?php
require_once 'Person.class.php';
require_once "include/datenbank.php";

session_start();




$action = isset($_GET['action']) ? $_GET['action'] : null;
$view = $action;
if (is_null($action)) $view = 'index';


switch ($action) {
    case 'person_register':
        if (
            !empty($_POST['anrede']) && !empty($_POST['vorname']) &&
            !empty($_POST['nachname']) && !empty($_POST['ort']) && !empty($_POST['email']) && !empty($_POST['passwort'])
        ) {
            $person = new Person($_POST);
            $person->insert($db);
            $_SESSION['message'] = 'elfolgreich registriert';
        } else {
            $_SESSION['errors'] = ' Bitte Formular ausfüllen';
        }
        break;
    case 'person_login':
        if (!empty($_POST['login']) && !empty($_POST['passwort'])) {
            $person = new Person($_POST);
            $person->insert($db);
        } else {
            $_SESSION['errors'] = ' Bitte Formular ausfüllen';
        }
}
// try {
//     require_once 'include/datenbank.php';
//     $sql = "SELECT COUNT(*) AS anzahl FROM benutzer WHERE 
//     login = '$login'";
// } catch (Exception $e) {
//     $conn = $e->getMessage();
// }





?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf8">
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>

</head>

<body>
    
    <?php require_once "include/navi.php"; ?>
    <hr>
    <?php require_once "view/" . $view . ".php"; ?>
    <hr>

    <?php if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    } ?>

    <?php if (isset($_SESSION['errors'])) {
        echo $_SESSION['errors'];
        unset($_SESSION['errors']);
    } ?>
</body>

</html>