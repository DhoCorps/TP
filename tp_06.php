<? session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 06</title>
</head>
<body>
    <? 
        if (empty($_POST['user'] || empty($_POST['password']))){
            if ($_POST['deconnexion"']=="Déconnexion"){
                session_destroy();    
            }
            ?>
            <form action="#" method="post">
                <label for='login'>Entrez votre Login</label>
                <input type='text' id='login' name='user' value="<? if !empty($_POST['user']){echo $_POST['user'];} ?>"></input>
                <label for='login'>Entrez votre mot de passe</label>
                <input type='text' id='mdp' name='password' value="<? if !empty($_POST['password']){echo $_POST['password'];} ?>"></input>
                <button type="submit" value="Connexion"></button>
             </form>
             <?php
        }elseif($_POST['user']=="mail@contact.com" and $_POST['password'] == "pwd123"){
            $_SESSION['login'] = $_POST['user'];
            include_once('header.html');
            ?>
            <form action="#" method="post">
                <button type="submit" name="deconnexion" value="Déconnexion"></button>
            </form>
            <?
        }
        else{
            $_SESSION['login'] = $_POST['user'];
        }
</body>
</html>