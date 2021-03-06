<?php
    require 'Classes/DB.php';
    require 'Classes/Users.php';

    $db = new DB();
    $link = $db->getDbLink();

    $user = new Users($link);

    foreach ($user->getUsers() as $users){
        echo $users["nom"] ." ";
        echo $users["prenom"] ."<br>";
    }

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice de révision</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="contains">
        <h1>Inscription</h1>
        <form action="">
            <input type="text" name="name" id="name" placeholder="Votre nom" minlength="3" maxlength="50" required>
            <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" minlength="3" maxlength="50">
            <input type="email" name="email" id="email" placeholder="Votre email" required>
            <input type="submit" value="S'inscrire">
        </form>
    </div>
</body>
</html>