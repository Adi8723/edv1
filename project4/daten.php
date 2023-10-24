<?php
$title = 'data';
$headline         = 'Daten';

?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./css/style.css">



</head>

<body>
    <main>

        <?php require_once "include/navi.php"; ?>
        <hr>
        <h1><?= $headline; ?></h1>

        <hr>

        <article>
        


            <form class="row g-3" action="index.php?action=person_register" method="post">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Anrede</option>
                    <option value="herr">Herr</option>
                    <option value="frau">Frau</option>
                </select>
                <div class="col-md-6">
                    <label for="vorname" class="form-label">First name</label>
                    <input type="text" class="form-control" id="vorname" name="vorname" value="" >
                </div>
                <div class="col-md-6">
                    <label for="nachname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" id="nachname" name="nachname">
                </div>
               
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="adress">
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city">
                </div>

                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="zip">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" >
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
            <br>

            <p>
                <a href="index.php">zurück zu home seite</a>
            </p>
        </article>



    </main>

</body>

</html>