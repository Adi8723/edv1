<!DOCTYPE html>
<html>

<head>
    <title>Multiplikationstabelle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table,
        tr,
        td {
            border: 2px solid #000;
            border-collapse: collapse;
            padding: 10px;
            font-weight: bold;

        }

        td:first-child {
            color: red;
            font-weight: bolder;
        }

        tr:first-child {
            color: red;
            font-weight: bolder;
        }

        .ausgabe {
            display: flex;
            justify-content: center;
        }

        form,
        h2 {
            margin-left: 20px;
        }

        .submit {
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <?php require_once "include/navi.php"; ?>
    <hr> 
    <h1>Tabelle</h1>
    <hr>


    <article>
        <form method="get" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <div class="mb-3 col-sm-2">
                <label for="zeile" class="form-label">Erste Zahl für Zeile:</label>
                <input type="number" class="form-control" id="zeile" name="zeilen">
            </div>
            <div class="mb-3 col-sm-2">
                <label for="spalte" class="form-label">Zweite Zahl für Spalte:</label>
                <input type="number" class="form-control" id="spalte" name="spalten">
            </div>

            <button type="submit" class="btn btn-primary mb-3 " value="Berechnen">Submit</button>
        </form>
    </article>
    <?php
    function multiplyNumbers($zeilen, $spalten)
    {
        $ausgabe = "<table>";
        for ($x = 1; $x <= $zeilen; $x++) {
            $ausgabe .= "<tr>";
            for ($y = 1; $y <= $spalten; $y++) {
                $ausgabe .= "<td>" . $x * $y . "</td>";
            }
            $ausgabe .= "</tr>";
        }
        return $ausgabe;
    }
    if (isset($_GET['spalten']) && isset($_GET['zeilen'])) {
        $spalten = $_GET['spalten'];
        $zeilen = $_GET['zeilen'];
        $ausgabe = multiplyNumbers($zeilen, $spalten);

        echo "<div class='ausgabe'>" . $ausgabe . "</div>";
    } else {
        echo "<hr><a href='index.php'>Zur Startseite gehen</a>";
    }
    ?>
</body>

</html>