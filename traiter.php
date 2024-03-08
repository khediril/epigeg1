<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age']) )
    {    var_dump($_GET);
        echo "<hr>";
        if(!empty($_GET['nom']) && !empty($_GET['prenom']) &&!empty($_GET['age']) )
        {
            $nom=$_GET['nom'];
        $prenom=$_GET['prenom'];
        $age=$_GET['age'];
        echo "Votre nom est :$nom <br>";
        echo "Votre prenom est :$prenom <br>";
        echo "Votre age est :$age <br>";
        }
        else
        {
            echo "<br>Tout les champs sont obligatoires...";
        }
    }
    else
    {
        echo "<br>Aucune donnees a traiter aller a la page :<a href='index.php'>clique ici</a>";
    }


?>
</body>
</html>