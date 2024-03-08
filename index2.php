<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mon formulaire</h1>
    <form action="traiter2.php" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom">
       
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom">
        
        <label for="age">Age:</label>
        <input type="text" name="age">     
        <input type="submit" value="Envoyer">

    </form>
    <hr>
    <a href="test.php?id=1023">page test</a>
</body>
</html>