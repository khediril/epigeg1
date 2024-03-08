<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercice 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
    function valider()
    {
        $errs = [];
        if (empty($_GET["nom"])) {
            $errs['nom'][] = "Le nom doit etre non vide<br>";
        }
        if (empty($_GET['note'])) {
            $errs['note'][] = "La note doit etre non vide<br>";
        } else {
            if (intval($_GET['note']) < 0 || intval($_GET['note']) > 20) {
                $errs['note'][] = "La note doit etre entre 0 et 20 <br>";
            }
        }
        return $errs;
    }
    ?>
</head>

<body>
    <?php
    $errs = [];
    if (isset($_GET["submit"])) {

        $errs  = valider();

        if (count($errs) > 0) {
            echo "<br>Errors<br><ul>";
            foreach ($errs as $msgs)
                foreach ($msgs as $msg)
                    echo "<li>$msg</li>";

            echo "</ul>";
        } else {
            $nom = $_GET["nom"];
            $heure = date("H");
            $note = $_GET['note'];
            if ($heure >= 18)
                $message = "Bonsoir $nom, <br />";
            else
                $message = "Bonjour $nom,<br />";
            echo $message . " votre votre note est $note";
        }
    }
    if (!isset($_GET["submit"]) || count($errs) > 0) {
    ?>
        <div class=container>
            <form action="" method="GET" class="row g-3">
                <div class="col-md-4">
                    <label for="validationServer01" class="form-label">Nom</label>
                    <input type="text" class="form-control <?= (isset($errs['nom'])) ? 'isvalid-feedback' : 'isInvalid' ?>" name="nom" id="validationServer01" value="<?php if (isset($_GET['nom'])) echo $_GET['nom']; ?>" required>
                    <div class="<?= (isset($errs['nom'])) ? 'valid-feedback' : 'invalid-feedback' ?>">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationServer02" class="form-label">Note</label>
                    <input type="text" class="form-control is-valid" name="note" id="validationServer02" value="<?php if (isset($_GET['note'])) echo $_GET['note']; ?>" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>