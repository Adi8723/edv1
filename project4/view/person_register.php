<?php

$title = 'register';

$headline = 'Register';


?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
</head>

<body>
    <main>

       
    <h1><?= $headline; ?></h1>

        <?php require_once "include/navi.php"; ?>
        <hr>

        <article>
        


            <form class="row g-3" action="index.php?action=person_register" method="post">
            <div class="col-md-6">
                    <label for="anrede" class="form-label">anrede</label>
                    <input type="text" class="form-control" id="anrede" name="anrede" value="" >
                </div>
                <div class="col-md-6">
                    <label for="vorname" class="form-label">First name</label>
                    <input type="text" class="form-control" id="vorname" name="vorname" value="" >
                </div>
                <div class="col-md-6">
                    <label for="nachname" class="form-label">Lastname</label>
                    <input type="text" class="form-control" id="nachname" name="nachname">
                </div>
               
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Ort</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="ort">
                </div>

             


                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" >
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="passwort" class="form-control" id="inputPassword4" name="passwort">
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