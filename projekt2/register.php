<!DOCTYPE html>

<html>
    <head>
        <meta charset= "utf8">
        <link rel="stylesheet" href="css/style.css">
    </head>

        <body>
            <h1>Register</h1>
            <hr>
            <?php require_once "include/navi.php"; ?>
            <hr>

            <form method="post"  action="<?= htmlspecialchars($_SERVER['PHP_SELF'])  ?>">

            <label for="login">Username</label>
            <input type="text" name="login" id="login">
            <label for="passwort">Passwort</label>
            <input type="password" name="passwort" id="passwort">
            <input type="submit" value="senden">

            

            </form>
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inf2";
if(!empty($_POST['login']) && !empty($_POST['passwort'])){

    $login = $_POST['login'];
    $passwort = $_POST['passwort'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO benutzer (login, passwort)
  VALUES ('$login', '$passwort')";
 
  $conn->exec($sql);
  echo "Benutzer wurde erfolgreich eingetragen!";
} catch(PDOException $e) {
    echo 'bitte eine andere loginname eingeben!';
  //echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
} else {
    echo 'geben Sie Ihre Benutzername und Passwort';
}
?>
        </body>
    
</html>
