<!DOCTYPE html>
<html lang=""fr">
    <head>
        <meta title="TP Cookies" />
    </head>
    <body>
        <form action="#" method="post">
            <label for="nom">Entrez votre nom : </label>
                <input type="text" id="nom" name="name">
                <? if (!empty($_POST['name'])){
                    $setcookie('nom', $_POST['name'], time()+3600);
                }
                    elseif (!empty($_COOKIE['nom'])){
                        echo $_COOKIE['nom'];
                    }
                    else{
                        echo "<span>Ce champ ne doit pas etre vide</span>";
                    }
                }
                </input>
            <label for="prenom">Entrez votre prénom : </label>
            <input type="text" id="prenom" name="firstname">
            <? if (!empty($_POST['firstname'])){
                $setcookie('prenom', $_POST['firstname'], time()+3600);
            }
                elseif (!empty($_COOKIE['prenom'])){
                    echo $_COOKIE['prenom'];
                }
                else{
                    echo "<span>Ce champ ne doit pas etre vide</span>";
                }
            }
            ?>
            </input>
            <label for="age">Entrez votre age : </label>
            <input type="text" id="age" name="old"><? if (!empty($_POST['old'])){
                $setcookie('age', $_POST['old'], time()+3600);
            }
                elseif (!empty($_COOKIE['age'])){
                    echo $_COOKIE['age'];
                }
                else{
                    echo "<span>Ce champ ne doit pas etre vide</span>";
                }
            }
            </input>
            <button type="submit">Valider</button>
        </form>
        <? if (!empty($_COOKIE['nom']) && !empty($_COOKIE['prenom']) && !empty($_COOKIE['age'])){
            echo <? "<H1> Bonjour {$_COOKIE['nom']} {$_COOKIE['prenom']} et vous avez {$_COOKIE['age']}</span>";
        }
        ?>
    </body>
</html>