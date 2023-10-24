<?php

$starttime = microtime(true);

$title             = 'Login';
$headline         = 'Anmelden';
$description     = 'Das ist die Beschreibung für Google.';

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
        // redirect('index.php');
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
        body {
            font-family: arial;
        }
    </style>
</head>

<body>

    <h1><?= $headline; ?></h1>

    <hr>
    <?php require_once "include/navi.php"; ?>
    <hr>
    <p><?= $meldung ?></p>
    <?php if (!$login) { ?>
        <form action='<?= $_SERVER['PHP_SELF'] ?>' method='post'>
            <p>
                Username:<br><input type='text' name='user' value='<?= $user ?>'>
            </p>
            <p>
                Passwort:<br><input type='text' autocomplete = "off" name='pwd' value='<?= $pwd ?>'>
            </p>
            <p>
                <input type='submit' value='Absenden'>
            </p>
        </form>
    <?php } ?>
    <p>
        <a href="index.php">zur startseite</a>
    </p>
    <footer style="text-align: right; background: #ccc; padding: 0.5em">
        <?= number_format(microtime(true) - $starttime, 6, ',') ?> sec
    </footer>
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