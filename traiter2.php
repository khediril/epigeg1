<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) )
    {    var_dump($_POST);
        echo "<hr>";
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) &&!empty($_POST['age']) )
        {
            $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
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