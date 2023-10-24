<?php

$title = 'login';
$headline         = 'Anmelden';


$login = isset($_COOKIE['admin']);

$user         = '';
$pwd          = '';
$meldung = 'Geben Sie den richtigen Usernamen und das Passwort ein.';

if (!$login) {

    if (isset($_POST['user']) && isset($_POST['pwd'])) {

        $user = $_POST['user'];
        $pwd  = $_POST['pwd'];

        if ($user == 'admin' && $pwd == 'geheim') {
            setcookie('admin', 'OK');
            header('Location: ' . $_SERVER['PHP_SELF']);
            die;
        }
    }
} else {
    $meldung = 'Sie sind als Admin angemeldet.<br>' .
        'Vergessen Sie das <a href="logout.php">Abmelden</a> nicht.';
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
   
</head>

<body>

    
    <?php require_once "include/navi.php"; ?>
    
    <h1><?= $headline; ?></h1>
    <hr>
    <p><?= $meldung ?></p>
    <?php if (!$login) { ?>
        <form action='<?= $_SERVER['PHP_SELF'] ?>' method='post'>
            <p>
                Username:<br><input type='text' name='user' value='<?= $user ?>'>
            </p>
            <p>
                Passwort:<br><input type='text' name='pwd' value='<?= $pwd ?>'>
            </p>
            <p>
                <input type='submit' value='Absenden'>
            </p>
        </form>
    <?php } ?>
    <p>
        <a href="index.php">zur startseite</a>
    </p>

</body>

</html>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

</body>

</html>