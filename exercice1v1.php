<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
function valider()
{
    $errs=[];
    if (empty($_GET["nom"])) {
        $errs['nom'][] = "Le nom est obligatoire<br>";
    }
    if (empty($_GET["note"])) {
        $errs['note'][] = "La note est obligatoire<br>";
    }
    if (intval($_GET["note"]) < 0 || intval($_GET["note"]) > 20) {
        $errs['note'][] = "La note doit etre entre 0 et 20<br>";
    }
    return $errs;

}
?>
</head>

<body>
    <?php
    $errs = [];
    if (isset($_GET["submit"])) {
        $errs=valider();
        if (count($errs) == 0) {
            $nom = htmlspecialchars($_GET["nom"]);
            $heure = date("H");
            $note = $_GET["nom"];
            if ($heure >= 18)
                $message = "Bonsoir $nom,";
            else
                $message = "Bonjour $nom,";
            echo $message." votre note est :$note" ;
        }
    } 
    if(!isset($_GET["submit"]) || count($errs)>0)
    {
    
    ?>
        <form action="" method="GET" name="form">
            Nom: <input type="text" name="nom" value="<?php if(isset($_GET['nom'])) echo $_GET['nom']  ?>"><br>
            <?php if(isset($errs['nom'])) 
                  echo '<div class="alert alert-danger" role="alert">';
                  foreach($errs['nom'] as $msg)
                    echo $msg;
                echo'</div>';
            ?>
            Note: <input type="text" name="note" value="<?php if(isset($_GET['note'])) echo $_GET['note']  ?>"><br>
            <?php if(isset($errs['note'])) 
                  echo '<div class="alert alert-danger" role="alert">';
                  foreach($errs['note'] as $msg)
                    echo $msg;
                echo'</div>';
            ?>
            <input type="submit" name="submit" value="Envoyer">
        </form>
    <?php
    }
    
    ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>

</html>